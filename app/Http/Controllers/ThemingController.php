<?php

namespace App\Http\Controllers;

use App\Services\Constants;
use Illuminate\Http\Request;

class ThemingController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('pages.theming', [
            'sidebarItems' => Constants::sidebarItems(),
        ]);
    }
}
