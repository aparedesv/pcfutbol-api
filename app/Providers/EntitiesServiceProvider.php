<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Entities\Interfaces\AuthEntityInterface;
use App\Entities\AuthEntity;

class EntitiesServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            AuthEntityInterface::class,
            AuthEntity::class,
        );
    }
}
