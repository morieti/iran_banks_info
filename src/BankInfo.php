<?php

namespace Morieti\IranBanksInfo;

use Morieti\IranBanksInfo\Exceptions\NotProcessableInputException;
use Morieti\IranBanksInfo\Exceptions\NotStandardLengthException;

class BankInfo
{
    protected static $instance;

    /**
     * Initialize the default config instance if necessary.
     *
     * @return Config
     */
    protected static function instance(): Config
    {
        if (static::$instance === null) {
            static::$instance = new Config();
        }

        return static::$instance;
    }

    /**
     * @return array
     */
    public static function getBanksData(): array
    {
        return (array)json_decode(file_get_contents('banks.json'), true);
    }

    /**
     * @param string $cardNumber
     * @return array
     */
    public static function fromCardNumber(string $cardNumber): array
    {
        if (strlen($cardNumber) != static::instance()->getStandardCardNumberSize()) {
            throw new NotStandardLengthException();
        }

        $cardPrefix = substr($cardNumber, 0, 6);
        return self::getBank($cardPrefix);
    }

    /**
     * @param string $ibanCode
     * @return array
     */
    public static function fromIban(string $ibanCode): array
    {
        if (strlen($ibanCode) != static::instance()->getStandardIbanSize()) {
            throw new NotStandardLengthException();
        }

        $bankCode = substr($ibanCode, 4, 3);
        return self::getBank($bankCode);
    }

    /**
     * @param string $id
     * @return array
     */
    private static function getBank(string $id): array
    {
        $banksData = static::getBanksData();

        $bank = null;
        foreach ($banksData as $item) {
            if (in_array($id, $item['unique_ids'])) {
                $bank = $item;
                break;
            }
        }

        if (empty($bank)) {
            throw new NotProcessableInputException();
        }

        $bank['logo'] = realpath(static::instance()->getBaseImagePath() . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . $bank['slug']);
        return $bank;
    }
}