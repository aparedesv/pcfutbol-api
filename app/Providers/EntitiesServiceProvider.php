<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Entities\AuthEntity;
use App\Entities\TeamEntity;
use App\Entities\Interfaces\AuthEntityInterface;
use App\Entities\Interfaces\TeamEntityInterface;

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

        $this->app->bind(
            TeamEntityInterface::class,
            TeamEntity::class,
        );
    }
}
