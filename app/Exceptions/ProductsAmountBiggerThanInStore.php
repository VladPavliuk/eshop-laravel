<?php

namespace App\Exceptions;
use Exception;
use Throwable;

class ProductsAmountBiggerThanInStore extends Exception
{
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        $message = 'amount-is-bigger-than-in-store';
        $code = 400;
        parent::__construct($message, $code, $previous);
    }
}