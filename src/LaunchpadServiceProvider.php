<?php

namespace Caffeinated\Launchpad;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;

class LaunchpadServiceProvider extends ServiceProvider
{
    public function boot()
    {
        PresetCommand::macro('launchpad', function ($command) {
            LaunchpadPreset::install();
        });
    }
}
