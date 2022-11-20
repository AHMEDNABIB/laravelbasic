<?php

namespace App\Http\Controllers\Exmple\;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index()
    {
        dd(app());
    }
}
