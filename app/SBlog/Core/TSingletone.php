<?php
    /**
     * Created by PhpStorm.
     * User: Sasha San
     * Date: 19.06.2019
     * Time: 16:20
     */


    namespace App\SBlog\Core;

    trait TSingletone
    {

        private static $instance;

        public static function instance(){
            if(self::$instance === null){
                self::$instance = new self;
            }
            return self::$instance;
        }

    }
