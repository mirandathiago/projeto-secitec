<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit76aa1412739cb1eb66c501e4880eb0b3
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Ifba\\Visitas\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ifba\\Visitas\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit76aa1412739cb1eb66c501e4880eb0b3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit76aa1412739cb1eb66c501e4880eb0b3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit76aa1412739cb1eb66c501e4880eb0b3::$classMap;

        }, null, ClassLoader::class);
    }
}
