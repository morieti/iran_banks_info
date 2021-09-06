<?php

namespace Morieti\IranBanksInfo\Exceptions;

use Exception;
use InvalidArgumentException;

class NotStandardLengthException extends InvalidArgumentException
{
    /**
     * Constructor.
     *
     * @param int $code
     * @param Exception|null $previous
     */
    public function __construct($code = 422, Exception $previous = null)
    {
        parent::__construct("String length is not standard.", $code, $previous);
    }
}