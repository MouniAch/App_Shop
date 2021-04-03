<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class IsaLivreur
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      if(Auth::user()){
          if(Auth::user()->type == 'Autres'){
            return $next($request);
          }

            return redirect('livreur');
            
      }

      return redirect('/');  
    }
}
