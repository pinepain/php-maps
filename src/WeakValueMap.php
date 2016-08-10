<?php

/*
 * This file is part of the pinepain/php-ref-lib PHP library.
 *
 * Copyright (c) 2016 Bogdan Padalko <pinepain@gmail.com>
 *
 * Licensed under the MIT license: http://opensource.org/licenses/MIT
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code or visit http://opensource.org/licenses/MIT
 */

namespace Ref;

class WeakValueMap extends AbstractWeakMap
{
    protected $behavior = self::WEAK_VAL;
}
