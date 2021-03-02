<?php
/**
 * Created by PhpStorm.
 * User: David-KALLA
 * Date: 01/03/2021
 * Time: 17:35
 */

namespace App\Response;

class Builder
{

    /*
     * Class properties
     */
    private $message = 0;
    private $status = false;
    private $data = null;
    private $data_name = "data";
    private $token = null;

    /**
     * Code constructor.
     * @param int $message
     * @param $name
     */
    public function __construct($message, $name)
    {
        $this->status = $message >= 0;
        $this->message = ($message < 0 ? $message * -1 : $message);
        $this->data_name = ($message < 0 ? 'errors' : $name);
    }

    /**
     * @param null $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @param null $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * @return array
     */
    public function reply()
    {
        if ($this->data == null)
            if ($this->token == null)
                return [
                    'status' => $this->status,
                    'message' => $this->message
                ];
            else
                return [
                    'status' => $this->status,
                    'message' => $this->message,
                    'token' => $this->token
                ];
        else
            if ($this->token == null)
                return [
                    'status' => $this->status,
                    'message' => $this->message,
                    $this->data_name => $this->data
                ];
            else// c est a sa que ressemeble mxon api de repinse serveur
                return [
                    'status' => $this->status,
                    'message' => $this->message,
                    'token' => $this->token,
                    $this->data_name => $this->data
                ];
    }

    public static function check($base, $target)
    {
        return ($base < 0 ? -$base : $base) == ($target < 0 ? -$target : $target);
    }

}
