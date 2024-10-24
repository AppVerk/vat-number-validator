<?php

/*
 * (c) Antal Áron <antalaron@antalaron.hu>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Antalaron\Component\VatNumberValidator\Tests;

use Antalaron\Component\VatNumberValidator\Tests\AbstractConstraintValidatorMiddlewareTest as SymfonyAbstractConstraintValidatorTest;
use Antalaron\Component\VatNumberValidator\VatNumberValidator;
use Symfony\Component\Validator\ConstraintValidatorInterface;

if (\PHP_VERSION_ID >= 80200) {
    class AbstractConstraintValidatorTest extends SymfonyAbstractConstraintValidatorTest
    {
        protected function createValidator(): ConstraintValidatorInterface
        {
            return new VatNumberValidator();
        }
    }
} else {
    class AbstractConstraintValidatorTest extends SymfonyAbstractConstraintValidatorTest
    {
        protected function createValidator()
        {
            return new VatNumberValidator();
        }
    }
}
