<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9136ea8a58bdce10e19855c038bc8ec3
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MonetizeLinkPlugin\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MonetizeLinkPlugin\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9136ea8a58bdce10e19855c038bc8ec3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9136ea8a58bdce10e19855c038bc8ec3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9136ea8a58bdce10e19855c038bc8ec3::$classMap;

        }, null, ClassLoader::class);
    }
}