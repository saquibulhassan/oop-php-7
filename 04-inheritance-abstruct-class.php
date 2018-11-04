<?php
/*
 * Here Shape is parent class.
 * Square & Triangel is child class that inherit the parent class Shape.
 *
 * Shape is abstract class and it has an abstract method called getArea().
 * So all the child class of Shape must have a method called getArea() with same signature.
 * This is main feature of abstract class. By the way abstract class can not be instantiate directly.
 *
 * This is also an example of inheritance
 * */
abstract class Shape {

    public $color;

    public function __construct($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    abstract function getArea();
}

class Square extends Shape {

    private $length;

    public function __construct($length, $color = 'red')
    {
        parent::__construct($color);

        $this->length = $length;
    }

    public function getArea()
    {
        // TODO: Implement getArea() method.
        return pow($this->length, 2);
    }
}

class Triangle extends Shape {

    private $base = 5;
    private $height = 5;

    public function __construct($base, $height, $color = 'green')
    {
        parent::__construct($color);

        $this->base = $base;
        $this->height = $height;
    }

    public function getArea()
    {
        // TODO: Implement getArea() method.
        return 0.5 * $this->base * $this->height;
    }
}


$square = new Square(10, 'black');
$triangle = new Triangle(10, 8);

var_dump($square->getArea(), $square->getColor());
var_dump($triangle->getArea(), $square->getColor());