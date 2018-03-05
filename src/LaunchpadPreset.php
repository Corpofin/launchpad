<?php

namespace Caffeinated\Launchpad;

use Illuminate\Support\Arr;
use Illuminate\Container\Container;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Console\Presets\Preset;

class LaunchpadPreset extends Present
{
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::updatePackages();
    }
    
    /**
     * Update the given package array.
     *
     * @param  array  $packages
     * @return array
     */
    protected static function updatePackageArray(array $packages)
    {
        return ['vue' => '^2.5.7'] + Arr::except($packages, [
            'babel-preset-react',
            'react',
            'react-dom',
        ]);
    }
}
