<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1b4b225eab60ffc8a6a193920c85e956
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
        'PHPMailer\\PHPMailer\\DSNConfigurator' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/DSNConfigurator.php',
        'PHPMailer\\PHPMailer\\Exception' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/Exception.php',
        'PHPMailer\\PHPMailer\\OAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/OAuth.php',
        'PHPMailer\\PHPMailer\\OAuthTokenProvider' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/OAuthTokenProvider.php',
        'PHPMailer\\PHPMailer\\PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/PHPMailer.php',
        'PHPMailer\\PHPMailer\\POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/POP3.php',
        'PHPMailer\\PHPMailer\\SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/SMTP.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1b4b225eab60ffc8a6a193920c85e956::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1b4b225eab60ffc8a6a193920c85e956::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1b4b225eab60ffc8a6a193920c85e956::$classMap;

        }, null, ClassLoader::class);
    }
}
