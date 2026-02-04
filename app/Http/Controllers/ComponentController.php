<?php

namespace App\Http\Controllers;

use App\Services\Constants;
use Illuminate\Http\Request;

class ComponentController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, ?string $component = null)
    {

        return view('pages.components', [
            'componentName' => $component,
            'sidebarItems' => Constants::sidebarItems(),
        ]);
    }
}
