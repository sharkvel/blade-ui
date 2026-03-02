<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LazyController extends Controller
{
    /**
     * CodeLight
     */
    public function codeLight(Request $req)
    {
        $lang = $req->string('lang');
        $path = $req->string('path');
        $id = $req->string('id', 'code-light');

        return view('lazy.theme-codelight', compact('lang', 'path', 'id'));
    }
}
