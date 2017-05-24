<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbad48d48e66a6add5bfba6a35c7ce02a
{
    public static $files = array (
        'fac7c6c5fdfa15b8c043ab0253796169' => __DIR__ . '/..' . '/truemvc/truemvc/src/Trivial/Support/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Trivial\\' => 8,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Trivial\\' => 
        array (
            0 => __DIR__ . '/..' . '/truemvc/truemvc/src/Trivial',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\PagesController' => __DIR__ . '/../..' . '/app/Controllers/PagesController.php',
        'App\\Controllers\\TodosController' => __DIR__ . '/../..' . '/app/Controllers/TodosController.php',
        'Trivial\\Core\\App' => __DIR__ . '/..' . '/truemvc/truemvc/src/Trivial/Core/App.php',
        'Trivial\\Core\\Request' => __DIR__ . '/..' . '/truemvc/truemvc/src/Trivial/Core/Request.php',
        'Trivial\\Core\\Router' => __DIR__ . '/..' . '/truemvc/truemvc/src/Trivial/Core/Router.php',
        'Trivial\\Database\\Connection' => __DIR__ . '/..' . '/truemvc/truemvc/src/Trivial/Database/Connection.php',
        'Trivial\\Database\\QueryBuilder' => __DIR__ . '/..' . '/truemvc/truemvc/src/Trivial/Database/QueryBuilder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbad48d48e66a6add5bfba6a35c7ce02a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbad48d48e66a6add5bfba6a35c7ce02a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbad48d48e66a6add5bfba6a35c7ce02a::$classMap;

        }, null, ClassLoader::class);
    }
}
