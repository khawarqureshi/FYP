<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit196a53fc26730106d6d58338572878ed
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit196a53fc26730106d6d58338572878ed::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit196a53fc26730106d6d58338572878ed::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
