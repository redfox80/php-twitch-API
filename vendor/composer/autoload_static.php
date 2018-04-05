<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit43f93e6f0c93f749bb3c9d50daef9f0c
{
    public static $prefixLengthsPsr4 = array (
        'r' => 
        array (
            'redfox80\\twitch\\dev\\' => 20,
            'redfox80\\twitch\\' => 16,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'redfox80\\twitch\\dev\\' => 
        array (
            0 => __DIR__ . '/../..' . '/public',
        ),
        'redfox80\\twitch\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit43f93e6f0c93f749bb3c9d50daef9f0c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit43f93e6f0c93f749bb3c9d50daef9f0c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
