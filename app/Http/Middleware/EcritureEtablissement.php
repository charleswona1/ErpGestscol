<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EcritureEtablissement
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
        }elseif (auth()->guard('admins')->user()->etablissement()->where('etablissement.id_etablissement', $request->route('id'))->first() == null) {
            return redirect()->back()->withErrors(['error' => 'Cet etablissement ne vous a pas été affecté vous ne pouvez pas le modifier']);
        }else{
            return $next($request);
        }
    }
}
