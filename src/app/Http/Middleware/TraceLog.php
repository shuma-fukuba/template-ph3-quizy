<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

// デバッグ用のトレースログ表示ミドルウェア
class TraceLog
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
        Log::debug('start ' . $request->url());

        $response = $next($request);

        Log::debug('end ' . $request->url());

        return $response;
    }
}
