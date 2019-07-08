<?php
    /**
     * Created by PhpStorm.
     * User: Sasha San
     * Date: 05.07.2019
     * Time: 0:59
     */

    namespace App\Patterns\Fundamental;

    use App\Patterns\Fundamental\PropertyContainer\PropertyContainer;

    class Blog extends PropertyContainer
    {
        private $maxsize;


        public function getMaxsize()
        {
            return $this->maxsize;
        }

        public function setMaxsize($maxsize)
        {
            $this->maxsize = $maxsize;
        }


    }
