<?php
namespace App\Providers;

use App\Events\UserSubscribed;
use App\Listeners\SendSubscriberEmail;
use App\Listeners\UpdateSubscribersTable;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

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
        // Register event listener manually
        Event::listen(
            UserSubscribed::class,
            UpdateSubscribersTable::class
        );

        Event::listen(
            UserSubscribed::class,
            SendSubscriberEmail::class
        );
    }
}
