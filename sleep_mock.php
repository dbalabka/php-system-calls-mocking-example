<?php
/*
 * (c) 2014, Dmitrijs Balabka
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Test\Foo;

class SleepMock
{
    private static $callback;

    public static function mock($callback)
    {
        self::$callback = $callback;
    }

    public static function call()
    {
        call_user_func_array(self::$callback, func_get_args());
    }
}

namespace App;

use \Test\Foo\SleepMock;

function sleep()
{
    call_user_func_array(array('Test\Foo\SleepMock', 'call'), func_get_args());
}