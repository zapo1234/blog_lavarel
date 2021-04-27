<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repositories\BasketInterfaceRepository;
use App\Repositories\BasketSessionRepository;

class BasketServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(BasketInterfaceRepository::class, BasketSessionRepository::class);
    }

    // ...
}
