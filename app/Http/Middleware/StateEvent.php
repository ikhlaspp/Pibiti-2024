<?php

namespace App\Http\Middleware;

use App\Models\StateEvent as ModelsStateEvent;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StateEvent
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $state = ModelsStateEvent::query()->first('status');
        
        if(!$state['status']){
            return redirect('/welcome');
        }
        
        return $next($request);
    }
}
