<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb4d2feaafdb7dcc161e74415dc4a428d
{
    public static $files = array (
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '23c18046f52bef3eea034657bafda50f' => __DIR__ . '/..' . '/symfony/polyfill-php81/bootstrap.php',
        '89efb1254ef2d1c5d80096acd12c4098' => __DIR__ . '/..' . '/twig/twig/src/Resources/core.php',
        'ffecb95d45175fd40f75be8a23b34f90' => __DIR__ . '/..' . '/twig/twig/src/Resources/debug.php',
        'c7baa00073ee9c61edf148c51917cfb4' => __DIR__ . '/..' . '/twig/twig/src/Resources/escaper.php',
        'f844ccf1d25df8663951193c3fc307c8' => __DIR__ . '/..' . '/twig/twig/src/Resources/string_loader.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Php81\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
        'A' => 
        array (
            'App\\Routes\\' => 11,
            'App\\Providers\\' => 14,
            'App\\Models\\' => 11,
            'App\\Controllers\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Php81\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php81',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'App\\Routes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/routes',
        ),
        'App\\Providers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/providers',
        ),
        'App\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'App\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
    );

    public static $classMap = array (
        'CURLStringFile' => __DIR__ . '/..' . '/symfony/polyfill-php81/Resources/stubs/CURLStringFile.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'ReturnTypeWillChange' => __DIR__ . '/..' . '/symfony/polyfill-php81/Resources/stubs/ReturnTypeWillChange.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb4d2feaafdb7dcc161e74415dc4a428d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb4d2feaafdb7dcc161e74415dc4a428d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb4d2feaafdb7dcc161e74415dc4a428d::$classMap;

        }, null, ClassLoader::class);
    }
}
