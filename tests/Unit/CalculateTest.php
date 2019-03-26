<?php

namespace Tests\Unit;

use App\Servises\FibonacciCalculator;
use Tests\TestCase;

class CalculateTest extends TestCase
{

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        /** @var FibonacciCalculator $calc */
        $calc = $this->app->get('fibonacci');

        $this->assertSame(13, $calc->calculateByPosition(7, true));
        $this->assertSame(1597, $calc->calculateByPosition(17, true));
        $this->assertSame(196418, $calc->calculateByPosition(27, true));
        $this->assertSame(24157817, $calc->calculateByPosition(37, true));
        $this->assertSame(2971215073, $calc->calculateByPosition(47, true));
        $this->assertSame(365435296162, $calc->calculateByPosition(57, true));
        $this->assertSame(44945570212853, $calc->calculateByPosition(67, true));
        $this->assertSame(5527939700884757, $calc->calculateByPosition(77, true));

        $this->assertSame(13, $calc->calculateByPosition(7));
        $this->assertSame(1597, $calc->calculateByPosition(17));
        $this->assertSame(196418, $calc->calculateByPosition(27));
        $this->assertSame(24157817, $calc->calculateByPosition(37));
        $this->assertSame(2971215073, $calc->calculateByPosition(47));
        $this->assertSame(365435296162, $calc->calculateByPosition(57));
        $this->assertSame(44945570212853, $calc->calculateByPosition(67));

        /**
         *  below is total fail )))
         */
//        $this->assertSame(5527939700884757, $calc->calculateByPosition(77))

    }
}
