<?php

namespace App\Http\Controllers;

use App\Response\Builder;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function json_response($message, $data = null, $token = null, $data_name = "data")
    {
        return response()->json($this->array_response($message, $data, $token, $data_name));
    }

    public function array_response($message, $data = null, $token = null, $data_name = "data")
    {
        $code = new Builder($message, $data_name);
        $code->setData($data);
        $code->setToken($token);
        return $code->reply();
    }

    public function liteResponse($message, $data = null,  $token = null, $data_name = "data")
    {
        $isJsonResponse = request()->isJson() or request()->isXmlHttpRequest() or request()->ajax();
        return $isJsonResponse
            ?
            $this->json_response($message, $data, $token, $data_name)
            :
            $this->array_response($message, $data, $token, $data_name);

    }
}
