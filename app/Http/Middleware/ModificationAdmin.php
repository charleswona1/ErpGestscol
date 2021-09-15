<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ModificationAdmin
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
            return redirect()->back()->withErrors(['error' => 'Votre compte est desactivé vous ne pouvez faire aucune action sur cette application']);
        }else{
            $niv = auth()->guard('admins')->user()->droit_admin()->where('code', 4)->first();
            if($niv == null){
                return redirect()->back()->withErrors(['error' => 'Vous n\'avez pas le droit de faire des modifications']);
            } else {
                return $next($request);
            }

        }
    }
}
