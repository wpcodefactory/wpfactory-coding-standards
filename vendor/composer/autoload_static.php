<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit45ed8025e2ef01158105df99840f68ce
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 55,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 
        array (
            0 => __DIR__ . '/..' . '/dealerdirect/phpcodesniffer-composer-installer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit45ed8025e2ef01158105df99840f68ce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit45ed8025e2ef01158105df99840f68ce::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit45ed8025e2ef01158105df99840f68ce::$classMap;

        }, null, ClassLoader::class);
    }
}
