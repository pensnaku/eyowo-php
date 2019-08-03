<?php

namespace EyowoPHP\Validator;

use EyowoPHP\Exception\EyowoPHPException;

class Validator
{
    const _MOBILE_PREFIX = '234';
    public static function validateMobile($mobile, $prefix = self::_MOBILE_PREFIX)
    {
        throw new EyowoPHPException();
    }
}
