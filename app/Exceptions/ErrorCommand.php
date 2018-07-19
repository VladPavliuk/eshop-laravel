<?php

namespace App\Exceptions;
use Exception;
use Throwable;

class ErrorCommand extends Exception
{
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
        session()->flash('error-message', $message);
    }
}