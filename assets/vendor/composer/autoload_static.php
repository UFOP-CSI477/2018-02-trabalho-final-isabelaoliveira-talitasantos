<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit198959eff478854aafaa81650cddbaad
{
    public static $prefixesPsr0 = array (
        'J' => 
        array (
            'JasonGrimes' => 
            array (
                0 => __DIR__ . '/..' . '/jasongrimes/paginator/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit198959eff478854aafaa81650cddbaad::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
