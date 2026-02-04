<?php

namespace App\Http\Controllers;

use App\Services\Constants;
use Illuminate\Http\Request;

class InstallationController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('pages.installation', [
            'sidebarItems' => Constants::sidebarItems(),
        ]);
    }
}
