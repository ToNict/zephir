<?php

/**
 * This file is part of the Zephir.
 *
 * (c) Phalcon Team <team@zephir-lang.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Zephir\Operators\Arithmetical;

/**
 * Generates an arithmetical operation according to the operands
 */
class SubOperator extends ArithmeticalBaseOperator
{
    protected string $operator = '-';

    protected string $bitOperator = '&';

    protected string $zvalOperator = 'zephir_sub_function';
}
