<?php

namespace Nijwel\MakeServiceGenerator\Providers;

use Illuminate\Support\ServiceProvider;
use Nijwel\MakeServiceGenerator\Commands\MakeServiceGeneratorCommand;

class MakeServiceGeneratorServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands([
            MakeServiceGeneratorCommand::class,
        ]);
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../stubs/service.stub' => resource_path('stubs/service.stub'),
        ]);
    }
}