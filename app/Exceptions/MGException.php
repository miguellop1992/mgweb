<?php
/**
 * Created by PhpStorm.
 * User: MIGUEL
 * Date: 26/8/2017
 * Time: 5:24 PM
 */

namespace App\Exceptions;


class MGException extends \Exception
{
    public $data;
    public $httpCode;

    /**
     * MGException constructor.
     * @param string $message mensage del error
     * @param int $code codigo del error
     * @param null $data data de retorno
     * @param int $httpCode codigo http del error
     * @param Exception|null $previous
     */
    function __construct($message, $code, $data = null, $httpCode=500, Exception $previous = null)
    {
        $this->data = $data;
        $this->httpCode= $httpCode;
        parent::__construct($message, $code, $previous);
    }

    function getData(){
        return $this->data;
    }

    function getHttpCode(){
        return $this->httpCode;
    }


}