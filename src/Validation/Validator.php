<?php

namespace EyowoPHP\Validation;

use EyowoPHP\Exception\EyowoPHPException;
use EyowoPHP\Constants;

class Validator
{
    /**
     * @param $mobile
     * @param string $prefix
     * @return bool
     */
    public static function validateMobile($mobile, $prefix = Constants\_MOBILE_PREFIX)
    {
        return true;
    }

    public function validateEmail($email)
    {
        return true;
    }
}
