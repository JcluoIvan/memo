<?php
    $config = array(

        'Demo' => 'classes\\Demo',

    );

    /* autoload */
    spl_autoload_register(function($class) use ($config) {

        if (isset($config[$class])) {
            $class = $config[$class];
        }
        $class = str_replace('\\', '/', $class);
        include "{$class}.php";
    });