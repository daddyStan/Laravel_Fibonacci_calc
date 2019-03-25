<?php

namespace App\Http\Controllers;

use App\Models\SequenceCalculator;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class SequenceController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function calculate(Request $request, SequenceCalculator $calculator)
    {
        $position = $request->post('position');

        $number = round(((sqrt(5)+1)/2) ** $position / sqrt(5));
        return view('fibonacci',['position' => $number]);
    }
}
