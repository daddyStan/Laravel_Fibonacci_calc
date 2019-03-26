<?php

namespace App\Servises\Interfaces;


interface FibonacciCalculatorInterface
{
    public function calculateByPosition(int $position, $isLoop) ;
}