<?php

namespace e_Kejaksaaan\Sample\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class SampleController extends Controller
{
    public function index()
    {
        return view('sample::sample')->with('message', config('sample.message'));
    }
}