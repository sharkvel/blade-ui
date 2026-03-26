<?php

namespace App\Http\Controllers;

use App\Markdown\CodeRendererExtension;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        CodeRendererExtension::$allowBladeForNextDocument = true;

        return view('pages.test', [
            'view' => 'contents.test',
        ]);
    }
}
