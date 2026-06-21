<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ResolveBrand
{
    /**
     * Resolve the active brand from the request host and share it with
     * the container and all views.
     *
     * a.cliente.com   -> brands.a
     * cliente.com     -> brands.parent (fallback)
     * localhost / IP  -> brands.parent
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     $key = $this->brandKeyFromHost($request->getHost());

    //     $brand = config("brands.$key", config('brands.parent'));

    //     // make available everywhere
    //     $brand['key'] = $key;
    //     app()->instance('brand', $brand);
    //     view()->share('brand', $brand);

    //     return $next($request);
    // }
    public function handle(Request $request, Closure $next): Response
    {
        $key = $this->brandKeyFromHost($request->getHost());

        // DEV ONLY: ?brand=a to preview a child on localhost
        if (app()->environment('local') && $request->query('brand')) {
            $candidate = $request->query('brand');
            if (array_key_exists($candidate, config('brands', []))) {
                $key = $candidate;
            }
        }

        $brand = config("brands.$key", config('brands.parent'));
        $brand['key'] = $key;
        app()->instance('brand', $brand);
        view()->share('brand', $brand);

        return $next($request);
    }

    /**
     * Extract the brand key from the host's leading subdomain label.
     * Returns 'parent' when there is no meaningful subdomain.
     */
    private function brandKeyFromHost(string $host): string
    {
        // strip a leading www. so www.cliente.com behaves like the apex
        $host = preg_replace('/^www\./', '', $host);

        $labels = explode('.', $host);

        // apex domain (cliente.com) or bare localhost -> parent
        if (count($labels) < 3) {
            return 'parent';
        }

        $sub = $labels[0];

        // only honour subdomains we actually know about
        return array_key_exists($sub, config('brands', [])) ? $sub : 'parent';
    }
}
