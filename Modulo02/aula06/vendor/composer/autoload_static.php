<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf3b72b2c46ba51d9459efc105b49c100
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Classes\\' => 
        array (
            0 => '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf3b72b2c46ba51d9459efc105b49c100::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf3b72b2c46ba51d9459efc105b49c100::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf3b72b2c46ba51d9459efc105b49c100::$classMap;

        }, null, ClassLoader::class);
    }
}