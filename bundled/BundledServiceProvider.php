<?php

namespace Increment\IMarket\Bundled;

use Illuminate\Support\ServiceProvider;

class BundledServiceProvider extends ServiceProvider{

  public function boot(){
    $this->loadMigrationsFrom(__DIR__.'/migrations');
    $this->loadRoutesFrom(__DIR__.'/routes/web.php');
  }

  public function register(){
  }
}