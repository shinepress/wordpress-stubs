<?php


class AVCSequenceParameterSetReader
{
    /**
     * @var string
     */
    public $sps;
    public $start = 0;
    public $currentBytes = 0;
    public $currentBits = 0;
    /**
     * @var int
     */
    public $width;
    /**
     * @var int
     */
    public $height;
    /**
     * @param string $sps
     */
    public function __construct($sps)
    {
    }
    public function readData()
    {
    }
    /**
     * @param int $bits
     */
    public function skipBits($bits)
    {
    }
    /**
     * @return int
     */
    public function getBit()
    {
    }
    /**
     * @param int $bits
     *
     * @return int
     */
    public function getBits($bits)
    {
    }
    /**
     * @return int
     */
    public function expGolombUe()
    {
    }
    /**
     * @return int
     */
    public function expGolombSe()
    {
    }
    /**
     * @return int
     */
    public function getWidth()
    {
    }
    /**
     * @return int
     */
    public function getHeight()
    {
    }
}