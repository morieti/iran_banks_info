<?php


namespace Morieti\IranBanksInfo;

class Config
{
    protected $standardCardNumberSize = 16;
    protected $standardIbanSize = 26;
    protected $baseImagePath = '';

    /**
     * @return int
     */
    public function getStandardCardNumberSize(): int
    {
        return $this->standardCardNumberSize;
    }

    /**
     * @param $size
     */
    public function setStandardCardNumberSize($size)
    {
        $this->standardCardNumberSize = $size;
    }

    /**
     * @return int
     */
    public function getStandardIbanSize(): int
    {
        return $this->standardIbanSize;
    }

    /**
     * @param $size
     */
    public function setStandardIbanSize($size)
    {
        $this->standardIbanSize = $size;
    }

    /**
     * @return string
     */
    public function getBaseImagePath(): string
    {
        return $this->baseImagePath;
    }

    /**
     * @param $path
     */
    public function setBaseImagePath($path)
    {
        $this->baseImagePath = $path;
    }
}