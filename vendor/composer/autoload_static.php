<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteca66768db8b9d342151453209d18b33
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticIniteca66768db8b9d342151453209d18b33::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteca66768db8b9d342151453209d18b33::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticIniteca66768db8b9d342151453209d18b33::$classMap;

        }, null, ClassLoader::class);
    }
}
