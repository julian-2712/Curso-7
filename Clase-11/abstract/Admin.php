<?php

require_once("Base.php");

class Admin extends Base 
{
    public function __construct($name)
    {
        $this->name = $name;
    }
}