<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;

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
        Passport::tokensCan([
            'profile' => 'Melihat identitas dasar akun ViaAccount.',
            'email' => 'Melihat alamat email akun ViaAccount.',
        ]);

        Passport::defaultScopes(['profile']);
        Passport::authorizationView('auth.oauth.authorize');
    }
}
