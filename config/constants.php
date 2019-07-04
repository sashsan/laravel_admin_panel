<?php


    $host = FALSE;
    if (isset($_SERVER['HTTP_HOST'])) {
        $host = $_SERVER['HTTP_HOST'];
    }

    $allowed_hosts = 'laravel.blog.san/';

    $root = dirname(__DIR__);
    $app_path = "http://{$allowed_hosts}{$_SERVER['PHP_SELF']}";
    $app_path = preg_replace("#[^/]+$#", '', $app_path);


    return[
        'ROOT' => $root,
        'WWW' => $root . '/public',
        'APP' => $root . '/app',
        'CORE' => $root . '/app/SBlog/Core',
        'LIBS' => $root . '/resources/libs',
        'CACHE' => $root . '/tmp/ache',
        'CONF' => $root . '/config',
        'PATH' => $app_path,
        'ADMIN' => $app_path . 'admin/index',
        'GALLERY' => $root . '/public/uploads/gallery',
    ];








