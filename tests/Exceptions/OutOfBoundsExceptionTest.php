<?php declare(strict_types=1);

/*
 * This file is part of the pinepain/php-object-maps PHP library.
 *
 * Copyright (c) 2016-2017 Bogdan Padalko <pinepain@gmail.com>
 *
 * Licensed under the MIT license: http://opensource.org/licenses/MIT
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code or visit http://opensource.org/licenses/MIT
 */

namespace Pinepain\ObjectMaps\Tests\Exceptions;


use PHPUnit\Framework\TestCase;

use Pinepain\ObjectMaps\Exceptions\OverflowException;
use Pinepain\ObjectMaps\Exceptions\ObjectMapExceptionInterface;


class OverflowExceptionTest extends TestCase
{
    public function testCatchExceptionByInterface()
    {
        try {
            throw  new OverflowException('test');
        } catch (ObjectMapExceptionInterface $e) {
            $this->assertSame('test', $e->getMessage());
        }
    }

    public function testCatchExceptionByCoreException()
    {
        try {
            throw new OverflowException('test');
        } catch (\OverflowException $e) {
            $this->assertSame('test', $e->getMessage());
        }
    }
}
