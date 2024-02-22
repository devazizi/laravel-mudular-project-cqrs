<?php

namespace Modules\Core;

use Illuminate\Support\ServiceProvider;

class CoreServiceProvider extends ServiceProvider
{
    public function boot()
    {
        dd("hello world this is  a simple app provider");
    }

    public function register()
    {

    }
}
