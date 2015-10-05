<?php

    class Clan
    {
        private $id;
        private $name;
        private $rank;
        private $join;

        function __construct($id, $name, $rank, $join)
        {
            $this->id = $id;
            $this->name = $name;
            $this->rank = $rank;
            $this->join = $join;
        }

        function getId()
        {
            return $this->id;
        }

        function getName()
        {
            return $this->name;
        }

        function getRank()
        {
            return $this->rank;
        }

        function getJoin()
        {
            return $this->join;
        }

        function setName($new_name)
        {
            $this->name = $new_name;
        }

        function setRank($new_rank)
        {
            $this->rank = (string) $new_rank;
        }

        function setJoin($new_join)
        {
            $this->join = $new_join;
        }

        function save()
        {
            $GLOBALS['DB']->exec("INSERT INTO members (name, rank, join_date) VALUES ('{$this->getName()}', '{$this->getRank()}', '{$this->getJoin()}');");
            $this->id = $GLOBALS['DB']->lastInsertId();
        }

        function update($new_rank)
        {
            $GLOBALS['DB']->exec("UPDATE members SET rank = '{$new_rank}' WHERE id = {$this->getId()};");
            $this->id = $GLOBALS['DB']->lastInsertId();
        }

        static function getAll()
        {
            $member_query = $GLOBALS['DB']->query("SELECT * FROM members");
            $all_members = array();
            foreach ($member_query as $member) {
                $id = $member['id'];
                $name = $member['name'];
                $rank = $member['rank'];
                $join = $member['join_date'];
                $new_member = new Clan($id, $name, $rank, $join);
                array_push($all_members, $new_member);
            }
            return $all_members;
        }

        static function deleteAll()
        {
            $GLOBALS['DB']->exec("DELETE FROM members");
        }
    }
 ?>
