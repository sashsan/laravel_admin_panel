<?php

    function mydebug($arr, $die = false){
        echo '<pre>' . print_r($arr, true) . '</pre>';
        if ($die) die;
    }

    function h($str){
        return htmlspecialchars($str, ENT_QUOTES);
    }

