<?php
    /**
     * Created by PhpStorm.
     * User: Sasha San
     * Date: 05.07.2019
     * Time: 1:03
     */

    namespace App\Patterns\Fundamental\Interfaces;


    interface PropertyContainerInterface
    {
        function addProperty($name, $value);

        function deleteProperty($name);

        function getProperty($name);

        function setProperty($name, $value);

    }
