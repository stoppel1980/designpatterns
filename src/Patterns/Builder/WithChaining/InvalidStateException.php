<?php


namespace App\Patterns\Builder\WithChaining;


use Throwable;

class InvalidStateException extends \Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct('Invalid state, not all required fields were set', $code, $previous);
    }
}