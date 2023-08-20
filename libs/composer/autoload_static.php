<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitec8fdfc200e6224e51247fbf289c0eba
{
    public static $prefixLengthsPsr4 = array (
        'P' =>
        array (
            'PuleenoCMS\\Dashboard\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PuleenoCMS\\Dashboard\\' =>
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitec8fdfc200e6224e51247fbf289c0eba::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitec8fdfc200e6224e51247fbf289c0eba::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitec8fdfc200e6224e51247fbf289c0eba::$classMap;
        }, null, ClassLoader::class);
    }
}
