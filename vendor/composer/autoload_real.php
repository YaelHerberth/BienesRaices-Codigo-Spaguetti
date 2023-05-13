<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb44c9cd65b2cd830ea3a7a32f19b7c6d
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitb44c9cd65b2cd830ea3a7a32f19b7c6d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb44c9cd65b2cd830ea3a7a32f19b7c6d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb44c9cd65b2cd830ea3a7a32f19b7c6d::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
