<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd76390fc92640037eef3018d1c1b214d
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd76390fc92640037eef3018d1c1b214d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd76390fc92640037eef3018d1c1b214d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd76390fc92640037eef3018d1c1b214d::$classMap;

        }, null, ClassLoader::class);
    }
}