<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Guest
{
   
    public function handle(Request $request, Closure $next)
    {
         if(Auth::check()) {
            //kalau gak ada history login bakal dikembalikan ke halaman login dengan pesan error
           return redirect()->route('auth.login')->with('notAllowed', 'Anda sudah login!');
           }
           return $next($request);      
    }
}
