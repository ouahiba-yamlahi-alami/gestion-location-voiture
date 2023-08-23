<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit32b35f0eba27daf875eb54db377919db
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit32b35f0eba27daf875eb54db377919db::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit32b35f0eba27daf875eb54db377919db::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit32b35f0eba27daf875eb54db377919db::$classMap;

        }, null, ClassLoader::class);
    }
}
