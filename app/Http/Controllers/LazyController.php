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

        $html = view('lazy.theme-codelight', compact('lang', 'path', 'id'))->render();

        return response($html)->header('Cache-Control', 'max-age=31536000');
    }
}
