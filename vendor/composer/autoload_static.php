<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit51d1e3ac0004145b026479112e036f52
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RedT\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RedT\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
    );

    public static $prefixesPsr0 = array (
        'F' => 
        array (
            'Fenom\\' => 
            array (
                0 => __DIR__ . '/..' . '/fenom/fenom/src',
            ),
        ),
    );

    public static $classMap = array (
        'Fenom' => __DIR__ . '/..' . '/fenom/fenom/src/Fenom.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit51d1e3ac0004145b026479112e036f52::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit51d1e3ac0004145b026479112e036f52::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit51d1e3ac0004145b026479112e036f52::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit51d1e3ac0004145b026479112e036f52::$classMap;

        }, null, ClassLoader::class);
    }
}
