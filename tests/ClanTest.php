<?php


    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Category.php";
    require_once "src/Task.php";

    $server = 'mysql:host=localhost:8889;dbname=cinnamon_burn';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);


    class ClanTest extends PHPUnit_Framework_TestCase
 ?>
