<?php

namespace App\Providers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Device;
use App\Models\Visitor;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Gate;
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
        Gate::define('admin', function (User $user) {
            return $user->role !== 'User';
        });


        view()->composer('*', function (View $view) {

            $deviceCount = Device::count();
            $visitorsCount = Visitor::count();

            $view
                ->with('dataUser', User::all())
                ->with('dataDevice', Device::all())
                ->with('deviceCount', Device::count())
                ->with('dataVisitor', Visitor::all())
                ->with('visitorsCount', Visitor::count());
            // dd($view);
        });

        config(['app.locale' => 'id']);
        Carbon::setLocale('id');
        date_default_timezone_set('Asia/Jakarta');
    }
}
