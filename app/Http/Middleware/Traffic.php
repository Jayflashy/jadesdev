<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Traffic as Traffik;
use Jenssegers\Agent\Agent;
use Stevebauman\Location\Facades\Location;


class Traffic
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // store traffic metric
        $ip = \Request::ip();
        $position = Location::get($ip);
        $agent = new Agent();
        // dd($agent->browser(), $agent->device(), $agent->platform(),$agent->deviceType());
        // dd($request->userAgent(),$request->getRequestUri(),$request->header('referer'),$request->header('sec-ch-ua-platform'));
        $check_traffic = Traffik::where('date',date('Y-m-d '))->where('ip_address', $ip);
        if($check_traffic->count() < 5)
        {
            if($check_traffic->where('url', $request->getRequestUri())->count() >= 1)
            {
                return $next($request);
            }else{
                Traffik::create([
                    'date' =>date('Y-m-d '),
                    'ip_address' => $ip,
                    'device' => $agent->device(),
                    'browser' => $agent->browser(),
                    'platform' => $agent->platform(),
                    'device_type' => $agent->deviceType(),
                    'user_agent' => $request->userAgent(),
                    'url' => $request->getRequestUri(),
                    'country' => json_encode($position), //get country
                    'visit' => 1,
                    'referrer' => $request->header('referer'),
                ]);
            }
        }
        return $next($request);
    }
}
