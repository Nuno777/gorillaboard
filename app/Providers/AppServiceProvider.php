<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Desporto;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;

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
        if(Schema::hasTable('desportos')) {
            $desportos = Desporto::all();
            view()->share('desportos', $desportos);
        }
        Paginator::useBootstrapFive();
    }

}
