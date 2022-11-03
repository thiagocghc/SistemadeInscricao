<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit82dd6e2157f369323cfd240bb8a25a96
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit82dd6e2157f369323cfd240bb8a25a96::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit82dd6e2157f369323cfd240bb8a25a96::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit82dd6e2157f369323cfd240bb8a25a96::$classMap;

        }, null, ClassLoader::class);
    }
}