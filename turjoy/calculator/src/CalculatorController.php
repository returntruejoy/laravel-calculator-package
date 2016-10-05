<?php

namespace Turjoy\Calculator;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CalculatorController extends Controller
{
    //
    public function add($valueOne, $valueTwo)
    {
        $result =  $valueOne + $valueTwo;

        return view('calculator::add', compact('result'));
    }

    public function subtract($valueOne, $valueTwo)
    {
        $result =  $valueOne - $valueTwo;

        return view('calculator::sub', compact('result'));
    }
    
    public function multiply($valueOne, $valueTwo)
    {
        $result = $valueOne * $valueTwo;
        
        return view('calculator::mul', compact('result'));
    }
    
    public function divide($valueOne, $valueTwo)
    {
        $result = $valueOne / $valueTwo;
        
        return view('calculator::div', compact('result'));
    }
}