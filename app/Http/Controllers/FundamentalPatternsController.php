<?php

namespace App\Http\Controllers;

use App\Patterns\Fundamental\BlogContainer;
use App\SBlog\Core\BlogApp;
use Illuminate\Http\Request;

class FundamentalPatternsController extends Controller
{
    /** Паттерн Контейнер свойств
     * @throws \Exception
     */

    public function PropertyContainer()
    {
        $name = 'Container properties';

        $item = new BlogContainer();

        $item->addProperty("maxsize",250);
        $item->setProperty("maxsize",250);

        $item->addProperty("admin_email",'admin_email');
        $item->setProperty("admin_email",'admin_email');

        $item->addProperty("shop_name",'Laravel Shop');
        $item->setProperty("shop_name",'Laravel Shop');

        $item->addProperty("smtp_host",'smtp.com.net');
        $item->setProperty("smtp_host",'smtp.com.net');

        $item->addProperty("smtp_port",'2525');
        $item->setProperty("smtp_port",'2525');

        $item->addProperty("smtp_protocol",'ssl');
        $item->setProperty("smtp_protocol",'ssl');

        $item->addProperty("smtp_login",'laravel@laravel.com');
        $item->setProperty("smtp_login",'laravel@laravel.com');

        $item->addProperty("smtp_password",'12345678');
        $item->setProperty("smtp_password",'12345678');

        $item->addProperty("admin_login",'a@a.ru');
        $item->setProperty("admin_login",'a@a.ru');

        $item->addProperty("admin_pass",'12345678');
        $item->setProperty("admin_pass",'12345678');

        return $item;

    }

}
