<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb7c00c6741a5ad03d4f0559e8f06c5d8
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pablo\\ContaBancaria\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pablo\\ContaBancaria\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb7c00c6741a5ad03d4f0559e8f06c5d8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb7c00c6741a5ad03d4f0559e8f06c5d8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb7c00c6741a5ad03d4f0559e8f06c5d8::$classMap;

        }, null, ClassLoader::class);
    }
}
