<?php
/*
 * Interface like an abstract class that bound sub class to have property & method with same signature.
 *
 * Difference between Abstract Class & Interface
 * 1. Abstract class may have protected method, but Interface only contain public method
 * 2. PHP does not support multiple inheritance. So any sub class can not implement more then one Abstract class. But sub class may implement multiple Interface.
 * */

interface Animal
{
    public function communicate();
}

class Dog implements Animal
{
    public function communicate()
    {
        return 'bark';
    }
}

class Cat implements Animal
{
    public function communicate()
    {
        return 'meow';
    }
}


interface Logger
{
    public function execute($message);
}

class FileLogger implements Logger
{
    public function execute($message)
    {
        var_dump("File logger : " . $message);
    }
}

class DatabaseLogger implements Logger
{
    public function execute($message)
    {
        var_dump("Database logger : " . $message);
    }
}

class UserController
{
    public $logger;
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function add()
    {
        $user = 'admin';

        $this->logger->execute($user);
    }
}

$user = new UserController(new FileLogger());
$user2 = new UserController(new DatabaseLogger());

$user->add();
$user2->add();