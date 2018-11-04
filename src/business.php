<?php

namespace Acme;

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