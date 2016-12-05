<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdea17627769f5b434fbf2cd67a1e1499
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'ServiceExecutor\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ServiceExecutor\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdea17627769f5b434fbf2cd67a1e1499::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdea17627769f5b434fbf2cd67a1e1499::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
