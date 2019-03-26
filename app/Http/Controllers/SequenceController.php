<?php

namespace App\Http\Controllers;

use App\Servises\FibonacciCalculator;
use App\Servises\Interfaces\FibonacciCalculatorInterface;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class SequenceController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /** @var FibonacciCalculatorInterface */
    private $calculator;

    /**
     * SequenceController constructor.
     * @param FibonacciCalculator $calculator
     */
    public function __construct(FibonacciCalculator $calculator)
    {
        $this->calculator = $calculator;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function calculate(Request $request)
    {
        $position = (int) $request->post('position');
        $isLoop = (bool)$request->post('check');

        return view('fibonacci',['position' =>  $this->calculator->calculateByPosition($position, $isLoop)]);
    }
}
