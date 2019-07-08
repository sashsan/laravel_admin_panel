<?php
    /**
     * Created by PhpStorm.
     * User: Sasha San
     * Date: 05.07.2019
     * Time: 1:01
     */

    namespace App\Patterns\Fundamental\PropertyContainer;

    use App\Patterns\Fundamental\Interfaces\PropertyContainerInterface;


    class PropertyContainer implements PropertyContainerInterface
    {
        private $propertyContainer = [];

        public function addProperty($name, $value)
        {
            $this->propertyContainer[$name] = $value;
        }

        function deleteProperty($name)
        {
            unset($this->propertyContainer[$name]);
        }

        function getProperty($name)
        {
            return $this->propertyContainer[$name] ?? null;
        }

        function setProperty($name, $value)
        {
            if (!isset($this->propertyContainer[$name])) {
                throw new \Exception("Property [{$name}] not found");
            }
            $this->propertyContainer[$name] = $value;
        }
    }
