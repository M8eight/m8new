<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
        Paginator::useBootstrap();

        Blade::directive('routeActive', function ($route_name) {
            return '<?php echo 
                (Route::currentRouteNamed(' . $route_name . ')) ? "active" : ""
            ?>';
        });

        Blade::directive('pageActive', function ($numetric) {
            return '<?php echo 
                (Route::current()->parameters["page"] == '.$numetric.') ? "active" : ""
            ?>';
        });

    }
}
