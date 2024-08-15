<?php

class Shape
{
    public static function getShape($name, $dimension)
    {
        switch($name) {
            case 'circle':
                return new Circle($dimension);
            case 'square':
                return new Square($dimension);
            default:
                throw new Exception("Unrecognized shape");
        }
    }
}

class Circle
{
    protected $radius = 0;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getArea()
    {
        return $this->radius * $this->radius * pi();
    }
}

class Square
{
    protected $side = 0;

    public function __construct($side)
    {
        $this->side = $side;
    }

    public function getArea()
    {
        return $this->side * $this->side;
    }
}