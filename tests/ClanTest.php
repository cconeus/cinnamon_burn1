<?php


    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Clan.php";

    $server = 'mysql:host=localhost:8889;dbname=cinnamon_burn_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);


    class ClanTest extends PHPUnit_Framework_TestCase
    {
        protected function tearDown()
        {
            Clan::deleteAll();
        }

        function test_getName()
        {
            $name = "cconeus";
            $test_name = new Clan($id, $name, $rank, $join);

            $result = $test_name->getName();

            $this->assertEquals($name, $result);
        }

        function test_save()
        {
            $id = 1;
            $name = "cconeus";
            $rank = "Leader";
            $join = 20140915;
            $test_name = new Clan($id, $name, $rank, $join);

            $test_name->save();
            $result = Clan::getAll();

            $this->assertEquals($test_name, $result[0]);
        }

        function test_update()
        {
            $id = 1;
            $name = "cconeus";
            $rank = "Leader";
            $join = 20140915;
            $test_rank = new Clan($id, $name, $rank, $join);
            $test_rank->save();

            $new_test_rank = "Co-Leader";

            $test_rank->update($new_test_rank);
            

            $this->assertEquals("Co-Leader", $test_rank->getRank());
        }
    }
 ?>
