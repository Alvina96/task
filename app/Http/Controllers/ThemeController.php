<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function changeTheme(Request $request)
    {
        session(['theme' => $request->input('theme')]);
        return redirect()->back();
    }
}
