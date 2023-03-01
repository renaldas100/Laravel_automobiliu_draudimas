<?php

namespace App\Http\Middleware;

use App\Models\ShortCode;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PatikrinimasMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
//        if (rand(1,10)<8){
//            return $next($request);
//        }else{
//            return new Response("Sistema neveikia");
//        }
        $response=$next($request);
//        dd(ShortCode::all());
        $content=$response->getContent();
        foreach (ShortCode::all() as $code) {
            $content=str_replace($code->shortcode, $code->replace, $content);
    }
        $response->setContent($content);
        return $response;

    }
}
