<?php

namespace EyowoPHP\Tests\Unit;

use PHPUnit\Framework\TestCase;
use EyowoPHP\Validator\Validator;

class ValidatorTest extends TestCase
{
    public function testValidateMobile()
    {
        $result = Validator::validateMobile('2348066080762');
        $this->assertEquals(false, $result);
    }
}
