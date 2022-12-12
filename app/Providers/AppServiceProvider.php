<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Desporto;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $desportos = Desporto::all();
        view()->share('desportos', $desportos);
    }
}
