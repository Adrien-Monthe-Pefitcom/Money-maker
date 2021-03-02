<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class LogController extends Controller
{
    protected function validator(array &$data)
    {
        $rule = [
            'content' => ['required'],
            'level' => ['required', Rule::in(['Info', 'Warnings', 'Error', 'Alert'])],
        ];
        return Validator::make($data, $rule);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param array $data
     * @param $status
     * @return void
     */
    public function save(array $data, $status)
    {
        $validator = $this->validator($data);
        $log = new Log();
        if ($validator->fails()){
            $log->content = $validator->errors();
            $log->level = "Warnings";
            $log->save();
            return;
        }
        try {
            $log->content = $data;
            $log->level = $status;
            $log->save();
            return;
        } catch (QueryException $exception) {
            $log->content = $exception->getMessage();
            $log->level = "Error";
            $log->save();
            return;
        }

    }
}
