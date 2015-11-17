<?php
/*
 * (c) 2014, Dmitrijs Balabka
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Test;

include_once './sleep_mock.php';
include_once './app.php';

use Test\Foo\SleepMock;

class AppTest
{
    public function test()
    {
        SleepMock::mock(function ($seconds) {
            echo "Sleeping $seconds seconds... Z-z-z-z";
        });
        $instance = new \App\Kernel();
        $instance->doWork();
    }
}
$test = new AppTest;
$test->test();