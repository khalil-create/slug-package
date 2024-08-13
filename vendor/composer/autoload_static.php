<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd3588661bfef01a0595c7299a2259d4e
{
    public static $prefixLengthsPsr4 = array (
        'k' => 
        array (
            'khalil\\slug2\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'khalil\\slug2\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd3588661bfef01a0595c7299a2259d4e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd3588661bfef01a0595c7299a2259d4e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd3588661bfef01a0595c7299a2259d4e::$classMap;

        }, null, ClassLoader::class);
    }
}
