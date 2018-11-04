<?php

class Person {
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Business {

    private $staff;

    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    public function hire(Person $person)
    {
        $this->staff->add($person);
    }

    /**
     * @return array
     */
    public function getStaff()
    {
        return $this->staff->getMembers();
    }

}


class Staff {
    public $members;

    public function __construct($members = [])
    {
        $this->members = $members;
    }

    public function add (Person $person)
    {
        $this->members[] = $person;
    }

    /**
     * @return array
     */
    public function getMembers()
    {
        return $this->members;
    }
}


$jhon = new Person('Jhon Doe');
$anderson = new Person('Anderson');

$staff = new Staff([$jhon]);

$shop = new Business($staff);

$shop->hire($anderson);

var_dump($shop->getStaff());
