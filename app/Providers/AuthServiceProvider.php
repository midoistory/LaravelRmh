<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('isAdmin', function($admin){
            return $admin->role_id == 1;
        });

        Gate::define('isPetugas', function($petugas){
            return $petugas->role_id == 2;
        });

        Gate::define('isSiswa', function($siswa){
            return $siswa->role_id == 3;
        });
    }
}
