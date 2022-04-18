<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->group(base_path('routes/api.php'));


            //Admin
            Route::prefix('admin/api')
                ->middleware(['api'])
                ->group(base_path('routes/UserApi/admin.php'));
            
            //Manager
            Route::prefix('manager/api')
                ->middleware(['api'])
                ->group(base_path('routes/UserApi/manager.php'));

            //Staff
            Route::prefix('staff/api')
                ->middleware(['api'])
                ->group(base_path('routes/UserApi/staff.php'));

            //Customer
            Route::prefix('customer/api')
                ->middleware(['api'])
                ->group(base_path('routes/UserApi/customer.php'));









            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
