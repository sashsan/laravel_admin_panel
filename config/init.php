<?php


    if(!defined("ROOT")) define("ROOT", dirname(__DIR__)); //app
    if(!defined("WWW")) define("WWW", ROOT . '\public'); //app/public
    if(!defined("VIEW")) define("VIEW", ROOT . '\resources\views'); //app/resources/views
    if(!defined("CONF")) define("CONF", ROOT . '\config'); //app/config
    if(!defined("WIDGETS")) define("WIDGETS", VIEW . '\widgets'); //app/resources/views/widgets



    //http://laravel.blog.san/index.php
    $app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
    //http://laravel.blog.san/
    $app_path = preg_replace("#[^/]+$#", '', $app_path);
    //http://laravel.blog.san/
    $app_path = str_replace('/public/', '', $app_path);

    if(!defined("PATH")) define("PATH", $app_path);
    if(!defined("ADMIN")) define("ADMIN", PATH .'admin');



