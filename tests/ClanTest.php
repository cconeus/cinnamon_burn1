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

        function test_getRank()
        {
            $name = "cconeus";
            $rank = "Leader";
            $test_name = new Clan($id, $name, $rank, $join);

            $result = $test_name->getRank();

            $this->assertEquals($rank, $result);
        }

        function test_getJoin()
        {

            $name = "cconeus";
            $rank = "Leader";
            $join = '2014-09-15';
            $test_join = new Clan($id, $name, $rank, $join);

            $result = $test_join->getJoin();

            $this->assertEquals($join, $result);
        }

        function test_save()
        {

            $name = "cconeus";
            $rank = "Leader";
            $join = '2014-09-15';
            $test_name = new Clan($id, $name, $rank, $join);

            $test_name->save();
            $result = Clan::getAll();

            $this->assertEquals($test_name, $result[0]);
        }

        function test_getAll()
        {

            $name = "cconeus";
            $rank = "Leader";
            $join = '2014-09-15';
            $test_rank = new Clan($id, $name, $rank, $join);
            $test_rank->save();


            $name2 = "cconeus2";
            $rank2 = "Leader2";
            $join2 = "2014-09-16";
            $test_rank2 = new Clan($id, $name, $rank, $join);
            $test_rank2->save();

            $result = Clan::getAll();

            $this->assertEquals([$test_rank, $test_rank2], $result);
        }

        function test_update()
        {

            $name = "cconeus";
            $rank = "Leader";
            $join = '2014-09-15';
            $test_rank = new Clan($id, $name, $rank, $join);
            $test_rank->save();
            $new_test_rank = "Co-Leader";

            $test_rank->update($new_test_rank);


            $this->assertEquals("Co-Leader", $test_rank->getRank());
        }
    }
 ?>
