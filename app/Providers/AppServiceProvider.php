<?php

namespace App\Providers;

use App\repo\PlayerInterface;
use App\domain\Player;
use App\repo\TeamInterface;
use App\domain\Team;

use App\infra\infrainterface\FileHandlerInterface;
use App\infra\implementation\ImageFileHandler;
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
        $this->app->singleton(PlayerInterface::class,Player::class);
        $this->app->singleton(TeamInterface::class,Team::class);
        $this->app->singleton(FileHandlerInterface::class,ImageFileHandler::class);
    }
}
