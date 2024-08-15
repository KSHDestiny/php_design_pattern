<?php

class Component
{
    protected $name = '';

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function addOneAndEcho($i)
    {
        $i++;
        echo $i . '-' . $this->name . '<br />';

        $instance = Dispatcher::getInstance();
        $instance::publish($this, $i);

        return $i;
    }
}