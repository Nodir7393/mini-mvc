<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitab6e450870558527ea1070848c4ddcea
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitab6e450870558527ea1070848c4ddcea::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitab6e450870558527ea1070848c4ddcea::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitab6e450870558527ea1070848c4ddcea::$classMap;

        }, null, ClassLoader::class);
    }
}
