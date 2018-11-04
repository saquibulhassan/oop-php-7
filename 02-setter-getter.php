<?php
/*
 * Here age property of Person class can not be accessed directly from outside of class
 * age property can only be accessed via setAge & getAge method.
 * This is also an example of Encapsulation.
 * */
class Person {

    public $name;
    private $age;

    public function __construct($name, $gender = 'Male')
    {
        $this->name = $name;
        /*
         * property & methods are public by default
         * */
        $this->gender = $gender;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        if($age < 18) {
            throw new Exception('Your age must be 18 at least.');
        }

        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }
}


$jhon = new Person('Jhon Doe');

$jhon->setAge(30);

var_dump($jhon->name, $jhon->gender, $jhon->getAge());