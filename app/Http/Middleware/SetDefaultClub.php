<?php

namespace App\Http\Middleware;

use Closure;
use App\Club;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class SetDefaultClub
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
        $defaultClubId = env('DEFAULT_CLUB_ID');
        
        $defaultClub = Club::find($defaultClubId);
        
        $httpHost = $request->getHttpHost();
       
        if (strpos($httpHost, '.') !== false) {
        
            $splittedHttpHost = explode(".", $httpHost, 2);
            
            $server = $splittedHttpHost[0];
            
            $defaultClub = Club::where('server', $server)->first();
            
            $defaultClubId = $defaultClub->id;
        }
        
        if ($defaultClub) {
            
            session(['DEFAULT_CLUB_ID' => $defaultClubId]);
            
            View::share('club', $defaultClub);
        
            return $next($request);            
        }
        else {
            abort(404);
        }
    }
}
