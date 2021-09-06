<?php

namespace Morieti\IranBanksInfo\Exceptions;

use Exception;
use InvalidArgumentException;

class NotProcessableInputException extends InvalidArgumentException
{
    /**
     * Constructor.
     *
     * @param int $code
     * @param Exception|null $previous
     */
    public function __construct($code = 422, Exception $previous = null)
    {
        parent::__construct("There is no bank matching this input", $code, $previous);
    }
}