<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit16007604b920ae3fcd1b5f562ebb9479
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'User\\Composertest\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'User\\Composertest\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit16007604b920ae3fcd1b5f562ebb9479::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit16007604b920ae3fcd1b5f562ebb9479::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit16007604b920ae3fcd1b5f562ebb9479::$classMap;

        }, null, ClassLoader::class);
    }
}
