<?php

class Raam {
    private $name;
    private $color="rood";

    function set_name(string $name="float"): string
     {
        $this->name=$name;
    }

    @return string
    function get_name(); string{
        return $this->name;
    }
}