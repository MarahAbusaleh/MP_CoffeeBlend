<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class Admin
{
    public function handle(Request $request, Closure $next)
    {

        if (!Auth::check()) {

            // Alert::error('error', 'Please Login First');

            return redirect()->route('adminLogin')->with('error', 'Please Login First');
        }

        return $next($request);
    }
}
