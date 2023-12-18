<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class isSystemAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $roles = json_decode(Auth::user()->account_role->roles,true);
            $role_id = array_reduce($roles, function ($carry, $data) {
                if ($data['role'] == 3) {
                    return $data['role'];
                }
            });
            if($role_id == 3){
                return $next($request);
            }else{
            }
        }
    }
}
