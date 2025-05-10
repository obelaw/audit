<?php

namespace Obelaw\Audit;

use Illuminate\Support\ServiceProvider;
use Obelaw\Twist\Addons\AddonsPool;

class ObelawAuditServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        AddonsPool::loadTwist(__DIR__ . '/../twist.php');
    }
}
