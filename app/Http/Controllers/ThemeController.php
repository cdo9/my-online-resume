<?php

namespace App\Http\Controllers;

class ThemeController extends Controller
{

    public function index($theme) {
        session()->put('theme', $theme);
        return redirect()->back();
    }
}
