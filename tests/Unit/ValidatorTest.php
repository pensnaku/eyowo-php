<?php

namespace EyowoPHP\Tests\Unit;

use EyowoPHP\Validation\Validator;
use PHPUnit\Framework\TestCase;


class ValidatorTest extends TestCase
{
    public function testValidateMobile()
    {
        $this->assertEquals(true, Validator::validateMobile('2348066080762'));
        $this->assertEquals(true, Validator::validateMobile('08066080762'));

        $this->assertEquals(false, Validator::validateMobile(''));
    }

    public function testValidateEmail() {
        $this->assertEquals(true, Validator::validateEmail('test@email.com'));
    }
}
