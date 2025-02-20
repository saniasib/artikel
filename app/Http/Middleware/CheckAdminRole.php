<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Filament\Facades\Filament;
use Illuminate\Support\MessageBag;
class CheckAdminRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Filament::auth()->user();

        if ($user && !$user->hasRole('super-admin')) {
            // Jika tidak memiliki role super-admin, arahkan ke halaman login
            Filament::auth()->logout();

            session()->flash('error', 'You do not have permission to access the admin panel.');
        
            return redirect()->route('filament.admin.auth.login');
        }

        return $next($request);
    }
}
