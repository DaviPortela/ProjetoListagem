<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc30530eb7956f25dfa35644a3936cf9e
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc30530eb7956f25dfa35644a3936cf9e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc30530eb7956f25dfa35644a3936cf9e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc30530eb7956f25dfa35644a3936cf9e::$classMap;

        }, null, ClassLoader::class);
    }
}
