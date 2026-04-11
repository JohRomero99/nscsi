<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Models\periodoLectivo;

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
            ->group(base_path('routes/colecturia.php'));

        Route::middleware('web')
            ->prefix('secretaria') // opcional
            ->group(base_path('routes/secretaria.php'));

        Route::middleware('web')
            ->prefix('medico') // opcional
            ->group(base_path('routes/medico.php'));
    
        Route::middleware('web')
            ->prefix('rrhh') // opcional
            ->group(base_path('routes/rrhh.php'));

        View::composer('*', function ($view) {
            $view->with('periodos', periodoLectivo::all());
        });

        if (!session()->has('periodo_lectivo_id')) {
        $periodo = PeriodoLectivo::first(); // o el activo

        if ($periodo) {
            session(['periodo_lectivo_id' => $periodo->id]);
        }
    }

    }

}
