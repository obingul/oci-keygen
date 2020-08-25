<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite1cb60405faaeafa75fb3006f4692154
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'decc78cc4436b1292c6c0d151b19445c' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/bootstrap.php',
        '3919eeb97e98d4648304477f8ef734ba' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Crypt/Random.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'ZipStream\\' => 10,
            'ZipMerge\\' => 9,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'PHPZip\\Zip\\' => 11,
        ),
        'M' => 
        array (
            'MyCLabs\\Enum\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ZipStream\\' => 
        array (
            0 => __DIR__ . '/..' . '/maennchen/zipstream-php/src',
        ),
        'ZipMerge\\' => 
        array (
            0 => __DIR__ . '/..' . '/grandt/phpzipmerge/src/ZipMerge',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'PHPZip\\Zip\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpzip/phpzip/src/Zip',
        ),
        'MyCLabs\\Enum\\' => 
        array (
            0 => __DIR__ . '/..' . '/myclabs/php-enum/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'System' => 
            array (
                0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
            ),
        ),
        'N' => 
        array (
            'Net' => 
            array (
                0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
            ),
        ),
        'M' => 
        array (
            'Math' => 
            array (
                0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
            ),
        ),
        'F' => 
        array (
            'File' => 
            array (
                0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
            ),
        ),
        'C' => 
        array (
            'Crypt' => 
            array (
                0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
            ),
        ),
    );

    public static $classMap = array (
        'RelativePath' => __DIR__ . '/..' . '/grandt/relativepath/RelativePath.php',
        'com\\grandt\\BinString' => __DIR__ . '/..' . '/grandt/binstring/BinString.php',
        'com\\grandt\\BinStringStatic' => __DIR__ . '/..' . '/grandt/binstring/BinStringStatic.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite1cb60405faaeafa75fb3006f4692154::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite1cb60405faaeafa75fb3006f4692154::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInite1cb60405faaeafa75fb3006f4692154::$prefixesPsr0;
            $loader->classMap = ComposerStaticInite1cb60405faaeafa75fb3006f4692154::$classMap;

        }, null, ClassLoader::class);
    }
}
