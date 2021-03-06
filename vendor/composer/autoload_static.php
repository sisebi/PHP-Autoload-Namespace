<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8a68a68b2e2eca878cf0740c31671fc4
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Estoque\\' => 8,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Estoque\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Estoque',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8a68a68b2e2eca878cf0740c31671fc4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8a68a68b2e2eca878cf0740c31671fc4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
