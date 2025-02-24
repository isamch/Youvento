<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ExampleMiddleware
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


        // dd($request);

        // var_dump($request);

        $param = $request->input('name');

        // $param = strtoupper(trim($request->query('name'), '-'));
        $allData = $request->all();

        // dd($allData);

        dd($next);
        // return $next($request);
    }
}
