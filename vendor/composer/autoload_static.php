<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbc2ea23320582e9961b33ee4d0459efe
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbc2ea23320582e9961b33ee4d0459efe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbc2ea23320582e9961b33ee4d0459efe::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
