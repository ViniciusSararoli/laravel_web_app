<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function main()
    {
        //return view('site.main');
        return redirect()->route('site.laravel');
    }
}
