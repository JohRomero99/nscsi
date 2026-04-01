<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Route::middleware('web')
            ->prefix('admin') // opcional
            ->group(base_path('routes/admin.php'));

        Route::middleware('web')
            ->prefix('colecturia') // opcional
            ->group(base_path('routes/admin.php'));

        Route::middleware('web')
            ->prefix('secretaria') // opcional
            ->group(base_path('routes/admin.php'));

        Route::middleware('web')
            ->prefix('medico') // opcional
            ->group(base_path('routes/admin.php'));

    }
}
