<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function index() {
        return view("form", ["arrangements" => \App\arrangements::all()]);
    }
}
