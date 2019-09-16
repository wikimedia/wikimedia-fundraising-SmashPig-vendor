<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit442d5bd04c536bc08fb965344071e9ce
{
    public static $files = array (
        'e40631d46120a9c38ea139981f8dab26' => __DIR__ . '/..' . '/ircmaxell/password-compat/lib/password.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '3e2471375464aac821502deb0ac64275' => __DIR__ . '/..' . '/symfony/polyfill-php54/bootstrap.php',
        'edc6464955a37aa4d5fbf39d40fb6ee7' => __DIR__ . '/..' . '/symfony/polyfill-php55/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php55\\' => 23,
            'Symfony\\Polyfill\\Php54\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\Yaml\\' => 23,
            'Symfony\\Component\\HttpFoundation\\' => 33,
            'Symfony\\Component\\EventDispatcher\\' => 34,
            'SmashPig\\' => 9,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Cache\\' => 10,
            'Predis\\' => 7,
            'PayWithAmazon\\' => 14,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'G' => 
        array (
            'GetOptionKit\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php55\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php55',
        ),
        'Symfony\\Polyfill\\Php54\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php54',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
        'Symfony\\Component\\HttpFoundation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/http-foundation',
        ),
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
        'SmashPig\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/cache/src',
        ),
        'Predis\\' => 
        array (
            0 => __DIR__ . '/..' . '/predis/predis/src',
        ),
        'PayWithAmazon\\' => 
        array (
            0 => __DIR__ . '/..' . '/amzn/login-and-pay-with-amazon-sdk-php/PayWithAmazon',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'GetOptionKit\\' => 
        array (
            0 => __DIR__ . '/..' . '/corneltek/getoptionkit/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PHPQueue' => 
            array (
                0 => __DIR__ . '/..' . '/coderkungfu/php-queue/src',
            ),
        ),
        'C' => 
        array (
            'Clio' => 
            array (
                0 => __DIR__ . '/..' . '/clio/clio/src',
            ),
        ),
    );

    public static $classMap = array (
        'CallbackFilterIterator' => __DIR__ . '/..' . '/symfony/polyfill-php54/Resources/stubs/CallbackFilterIterator.php',
        'EasyPeasyICS' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/EasyPeasyICS.php',
        'PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
        'PHPMailerOAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauth.php',
        'PHPMailerOAuthGoogle' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauthgoogle.php',
        'POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.pop3.php',
        'RecursiveCallbackFilterIterator' => __DIR__ . '/..' . '/symfony/polyfill-php54/Resources/stubs/RecursiveCallbackFilterIterator.php',
        'SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.smtp.php',
        'SessionHandlerInterface' => __DIR__ . '/..' . '/symfony/polyfill-php54/Resources/stubs/SessionHandlerInterface.php',
        'ntlm_sasl_client_class' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/ntlm_sasl_client.php',
        'phpmailerException' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit442d5bd04c536bc08fb965344071e9ce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit442d5bd04c536bc08fb965344071e9ce::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit442d5bd04c536bc08fb965344071e9ce::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit442d5bd04c536bc08fb965344071e9ce::$classMap;

        }, null, ClassLoader::class);
    }
}
