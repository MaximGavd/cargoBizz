<?php


namespace Core;

class Calculator
{
    public static function containersNeeded(Container $container , array $packages): int | float
    {
        $packagesVolume = 0;
        foreach ($packages as $package) {
            $packagesVolume += $package->volume() * $package->count;
        }
        return ceil($container->volume() / $packagesVolume);
    }
}