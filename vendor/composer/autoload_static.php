<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita44f3e4e33daa520bc5726a41088945c
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita44f3e4e33daa520bc5726a41088945c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita44f3e4e33daa520bc5726a41088945c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita44f3e4e33daa520bc5726a41088945c::$classMap;

        }, null, ClassLoader::class);
    }
}
