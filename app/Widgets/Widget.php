<?php

    namespace App\Widgets;

    class Widget
    {

        protected $widgets;

        public function __construct()
        {
            $this->widgets = config('widgets');
        }

        public function show($obj, $data = [])
        {
            if (isset($this->widgets[$obj])) {
                $obj = \App::make($this->widgets[$obj], $data);
                return $obj->execute();
            }
        }
    }
