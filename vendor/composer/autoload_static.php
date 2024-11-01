<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit85469b406cf957d0a5fdc64cf428755c
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MatthiasMullie\\PathConverter\\' => 29,
            'MatthiasMullie\\Minify\\' => 22,
        ),
        'L' => 
        array (
            'Leafo\\ScssPhp\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MatthiasMullie\\PathConverter\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/path-converter/src',
        ),
        'MatthiasMullie\\Minify\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/minify/src',
        ),
        'Leafo\\ScssPhp\\' => 
        array (
            0 => __DIR__ . '/..' . '/leafo/scssphp/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'L' => 
        array (
            'Less' => 
            array (
                0 => __DIR__ . '/..' . '/oyejorge/less.php/lib',
            ),
        ),
    );

    public static $classMap = array (
        'lessc' => __DIR__ . '/..' . '/oyejorge/less.php/lessc.inc.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit85469b406cf957d0a5fdc64cf428755c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit85469b406cf957d0a5fdc64cf428755c::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit85469b406cf957d0a5fdc64cf428755c::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit85469b406cf957d0a5fdc64cf428755c::$classMap;

        }, null, ClassLoader::class);
    }
}
