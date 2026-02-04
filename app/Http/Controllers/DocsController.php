<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, ?string $component = null)
    {
        if (blank($component)) {
            return view('pages.docs');
        }

        return match ($component) {
            'button' => view('pages.button'),
            default => 'Component not found'
        };
    }
}
