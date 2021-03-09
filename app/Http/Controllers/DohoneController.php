<?php

namespace App\Http\Controllers;

use App\Http\Payments\Dohone\Dohone;
use App\Models\Transaction;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DohoneController extends Controller
{
    protected $transaction;
    protected $data;

    public function check(Request $request)
    {
        return Dohone::cotation($request->amount, $request->get('method'));
    }

    /**
     * @param array $data
     * @param $reason
     * @param $transcation
     */
    protected function init(array $data, $reason, $transcation)
    {
        $this->data = [
            'send-data' => $data,
            'reason' => $reason,
            'transaction' => $transcation,
        ];

        (new LogController())->save($data, "Info");

    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function orderRest(Request $request)
    {
        $transaction = Transaction::findOrFail($request->transaction_id);
        $this->transaction = $transaction;
        $this->init($request->toArray(), "Paiment de la transaction " . $transaction->id, $transaction);
        return $this->launch($request);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function payRest(Request $request)
    {
        $transaction = Transaction::findOrFail($request->transaction_id);
        $this->transaction = $transaction;
        $this->init($request->toArray(), "Transfer money " . $transaction->id, $transaction);
        return $this->cashOut($request);
    }

    /**
     * @param Request $request
     * @return array|Factory|JsonResponse|View
     */
    protected function launch(Request $request)
    {
        if ($request->isJson()) {
            $result = Dohone::restInit(
                $request->phone,
                $this->transaction->amount,
                $request->email,
                $request->get('method'),
                $request->orangeCode,
                $this->transaction->id,
                url('/'),
                route('transaction.dohone.verification', $this->transaction),
                $this->data['reason'] . ' ' . Dohone::method($request->get('method')),
                $request->name
            );

            (new LogController())->save($result, "Info");

            return response()->json([
                "status" => $result['status'],
                "message" => $result['status'] ? config('code.request.SUCCESS') : -config('code.request.FAILURE'),
                $result['status'] ? "data" : "errors" => $result['message'],
                "codeRequired" => $result["codeRequired"]
            ]);
        }

        $result = Dohone::init(
            auth()->user()->phone,
            $this->transaction->amount,
            auth()->user()->email,
            $this->transaction->id,
            route('profil'),
            route('transaction.dohone.verification', $this->transaction),
            route('profil'),
            $this->data['reason'],
            auth()->user()->name
        );

        (new LogController())->save($result, "Info");

        return $result;
    }

    /**
     * @param Request $request
     * @return array|Factory|JsonResponse|View
     */
    protected function cashOut(Request $request)
    {
        $result = Dohone::restPayoutInit(
            $request->destination,
            $this->transaction->amount,
            $request->devise,
            $request->get('mode'),
            $request->nameDest,
            $request->ville,
            $request->pays,
            $request->rUserId,
            $this->transaction->id,
            route('transaction.dohone.verification', $this->transaction)
        );

        (new LogController())->save($result, "Info");

        return response()->json([
            "status" => $result['status'],
            "message" => $result['status'] ? config('code.request.SUCCESS') : -config('code.request.FAILURE'),
            $result['status'] ? "data" : "errors" => $result['message']
        ]);
    }

    /**
     * @param Request $request
     * @return array|JsonResponse
     */
    public function SMSConfirmation(Request $request)
    {
        $result = Dohone::restSMSConfirmation($request->phone, $request->code);
        return $this->liteResponse($result['status'] ? config('code.request.SUCCESS') : config('code.request.FAILURE'), $result['message']);
    }

    /**
     * @param Request $request
     * @param Transaction $transaction
     * @return string
     */
    public function verify(Request $request, Transaction $transaction)
    {
        $data = Dohone::getResult($request);
        (new LogController())->save($data, "Info");

        try {
            file_put_contents("confidential/" . $transaction->id . ".md", ["transaction" => $transaction, "data" => json_encode($data)]);
            if (Dohone::verify($transaction->amount, $data['idReqDoh'], $transaction->id)) {
                file_put_contents("confidential/verify-" . $transaction->id . ".md", ["transaction" => $transaction, "data" => json_encode($data)]);
                //TODO : implement the logic post verification of the payment
                return ' Order verify with success status '.config('code.request.SUCCESS');
            }
            return ' Order verify with error status '.config('code.request.FAILURE');
        } catch (Exception $exception) {
            file_put_contents("confidential/exception.md", $exception->getMessage());
            return  $exception->getMessage();
        }
    }
}
