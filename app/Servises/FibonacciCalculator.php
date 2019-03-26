<?php

namespace App\Servises;


use App\Servises\Interfaces\FibonacciCalculatorInterface;

class FibonacciCalculator implements FibonacciCalculatorInterface
{
    public function calculateByPosition(?int $position, $isLoop = false)
    {
        if ( $isLoop ) {
            return (int) $this->loopMethod($position);
        }

        return (int) $this->formulaMethod($position);
    }

    private function formulaMethod($position)
    {
        return round(((sqrt(5) + 1) / 2) ** $position / sqrt(5));
    }

    private function loopMethod($position)
    {
        if ( $position < 3 ) {
            return 1;
        }

        $num1 = 1;
        $num2 = 1;
        $num3 = 2;
        $tempPos = 3;

        while ( true ) {
            $num3 = $num2 + $num3;
            $num2 = $num1 + $num2;
            $num1 = $num3 - $num2;

            $tempPos++;

            if ( $tempPos === $position ) {
                return $num3;
            }
        }
    }
}