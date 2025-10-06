<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    protected function redirectTo($request): ?string
    {
        if (! $request->expectsJson()) {
            // Kalau akses URL admin tapi belum login
            if ($request->is('admin') || $request->is('admin/*')) {
                return route('admin.login');
            }

            // Default redirect ke user login
            return route('user.login');
        }

        return null;
    }
}
