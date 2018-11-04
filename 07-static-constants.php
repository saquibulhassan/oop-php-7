<?php
/*
 * Static method & property work as global scope.
 * It does not separate method & property for each object rather then it shares to all object
 * */

class Math {
    CONST PI = 3.1416;

    public static $something = 4;
    public static $count = 4;

    public static function sumOf(...$nums)
    {
        return array_sum($nums);
    }

    public static function addCount()
    {
        static::$count++;
    }

    // how to call constant inside class
    public static function getArea($radius)
    {
        return 2 * self::PI * $radius;
    }
}

// print static method $something
var_dump(Math::$something);

// call static method sumOf
var_dump(Math::sumOf(1, 2, 3, 4, 5, 6));

// run static method addCount to increment $count variable
Math::addCount();
Math::addCount();
Math::addCount();

var_dump(Math::$count);

// for constant only
var_dump(Math::getArea(5));
var_dump(Math::PI);


// what happen if static method is instantiated?
var_dump('After Instantiate');
$math = new Math();
var_dump($math::sumOf(4,5,6));
$math::addCount();
$math::addCount();

var_dump($math::$count);
var_dump($math::PI);

