<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, ...$roles)
    {
        // // Periksa apakah pengguna telah login dan memiliki salah satu dari peran yang diberikan
        // if (auth()->check() && auth()->user()->hasAnyRole($roles)) {
        //     return $next($request);
        // }
        // // Jika pengguna tidak memiliki hak akses, simpan pesan kesalahan di session
        // // dan alihkan pengguna kembali ke halaman sebelumnya
        // session()->flash('error', 'Anda Tidak Diizinkan Mengakses Halaman Ini');
        // return redirect()->back();
    }
}
