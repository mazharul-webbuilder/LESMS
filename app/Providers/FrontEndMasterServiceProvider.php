<?php

namespace App\Providers;

use App\Services\FrontEndMasterService;
use Illuminate\Support\ServiceProvider;

class FrontEndMasterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        view()->composer('frontend.master.master', function ($view) {
            $frontEndMasterService = app(FrontEndMasterService::class);
            $view->with([
                'categories' => $frontEndMasterService->getCategories(),
//                'cart' => $frontEndMasterService->getCarts(),
            ]);

        });
    }
}
