<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4efded45d0e3cc4aeb2908b981960b4a
{
    public static $files = array (
        '5fbcdd10ee70eebc853edf3d326a6157' => __DIR__ . '/../..' . '/source/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'C' => 
        array (
            'CoffeeCode\\DataLayer\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'CoffeeCode\\DataLayer\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/datalayer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4efded45d0e3cc4aeb2908b981960b4a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4efded45d0e3cc4aeb2908b981960b4a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}