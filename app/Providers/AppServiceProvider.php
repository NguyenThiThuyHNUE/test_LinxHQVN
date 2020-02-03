<?php

namespace App\Providers;

use App\Http\Controllers\Repository\impl\LeaveRepository;
use App\Http\Controllers\Repository\LeaveRepositoryInterfave;
use App\Http\Controllers\Service\impl\LeaveService;
use App\Http\Controllers\Service\LeaveServiceInterface;
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
        $this->app->singleton(LeaveRepositoryInterfave::class,LeaveRepository::class);
        $this->app->singleton(LeaveServiceInterface::class,LeaveService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
