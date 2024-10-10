<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function main()
    {
        $theme = session('theme', 'classic');
        return view("themes.{$theme}.main");
    }

    public function contacts()
    {
        $theme = session('theme', 'classic');
        return view("themes.{$theme}.contacts");
    }
}
