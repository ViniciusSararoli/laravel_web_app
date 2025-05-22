<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function number_page(int $number = 1) {
        echo $number;
    }
}
