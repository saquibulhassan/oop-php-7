<?php
/*
 * Encapsulation is a process of data hiding / security
 * We can set Encapsulation using "private" & "protected" keyword
 * private method & property can be accessed only inside of class
 * protected method & property can be accessed from inside of class & from sub class with inheritance
 *
 * Here "connect" method can only be accessed inside of LightSwitch class
 * & "activate" method can be accessed from sub class & inside of class
 * */
class LightSwitch {

    public function on()
    {

    }

    public function off()
    {

    }

    private function connect()
    {

    }

    protected function activate()
    {

    }
}