<?php

namespace Regchain\StatecrimeDir1\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{
    public function index()
    {
        return view('statecrime-dir1::sample')->with('message', config('sample.message'));
    }
}