<?php


namespace EyowoPHP;


use EyowoPHP\Exception\EyowoPHPException;

class EyowoClient
{
    private static $appKey = null;
    private static $appSecret = null;
    private $errorMessage = '';

    /**
     * @param null $appKey
     * @param null $appSecret
     * @throws EyowoPHPException
     */
    public function __construct($appKey = null, $appSecret = null)
    {
        if ($appKey === null) {
            if (self::$appKey === null) {
                $this->errorMessage = 'No App key provided, and none is globally set. ';
                $this->errorMessage .= 'Use EyowoClient::setAppKey, or instantiate the EyowoClient class with an $appKey parameter.';
            }
            throw new EyowoPHPException($this->errorMessage);
        }

        if ($appSecret === null) {
            if (self::$appSecret === null) {
                $this->errorMessage = 'No App secret provided, and none is globally set. ';
                $this->errorMessage .= 'Use EyowoClient::setAppSecret, or instantiate the EyowoClient class with an $appSecret parameter.';
            }
            throw new EyowoPHPException($this->errorMessage);
        }

        self::$appKey = $appKey;
        self::$appSecret = $appSecret;
    }

    /**
     * @param null $appKey
     */
    public static function setAppKey($appKey)
    {
        self::$appKey = $appKey;
    }

    /**
     * @param null $appSecret
     */
    public static function setAppSecret($appSecret)
    {
        self::$appSecret = $appSecret;
    }


}