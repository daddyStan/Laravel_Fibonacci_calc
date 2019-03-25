<?php

namespace App\Servises;


use App\Servises\Interfaces\FibonacciCalculatorInterface;

class FibonacciCalculator implements FibonacciCalculatorInterface
{
    public function calculateByPosition(int $position): int
    {
        return round(((sqrt(5)+1)/2) ** $position / sqrt(5));
    }
}