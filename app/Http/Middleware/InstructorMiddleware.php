<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class InstructorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated as an instructor
        if (Auth::guard('instructor')->check()) {
            return $next($request);
        }

        // If not authenticated as an instructor, redirect or perform another action
        return redirect('/'); // Redirect to home, for example
    }
}
