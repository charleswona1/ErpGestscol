<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class suppressionAdmin
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
        $droit = auth()->guard('admins')->user()->enabled;
        if($droit == 0){
            return response()->json(['error' => 'Votre compte est desactivé vous ne pouvez faire aucune action sur cette application']);
           // return redirect()->back()->withErrors("Vous n'avez pas aucun droit votre compte est desactivé");
        }else{
            $niv = auth()->guard('admins')->user()->droit_admin()->where('code', 1)->first();
            if($niv == null){
                return response()->json(['error' => 'Vous n\'avez le droit de faire cette suppresion']);
            } else {
                return $next($request);
            }
            
        }
    }
}
