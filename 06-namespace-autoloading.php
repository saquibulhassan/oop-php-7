<?php
/*
 * Here i used composer autoload
 * Plz see the composer.json file for auto loading configuration
 * */
require __DIR__ . '/vendor/autoload.php';

use Acme\Person;
use Acme\Staff;
use Acme\Business;

$jhon = new Person('Jhon Doe');
$anderson = new Person('Anderson');

$staff = new Staff([$jhon]);

$shop = new Business($staff);

$shop->hire($anderson);

var_dump($shop->getStaff());