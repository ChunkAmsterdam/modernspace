<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfc7ac81b1b1283ae744eecf0744b306b
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DevOwl\\RealUtils\\Test\\' => 22,
            'DevOwl\\RealUtils\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DevOwl\\RealUtils\\Test\\' => 
        array (
            0 => __DIR__ . '/../..' . '/test/phpunit',
        ),
        'DevOwl\\RealUtils\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfc7ac81b1b1283ae744eecf0744b306b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfc7ac81b1b1283ae744eecf0744b306b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}