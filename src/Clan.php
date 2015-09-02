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
            $this->name = (string) $new_name;
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
            $GLOBALS['DB']->exec("INSERT INTO member (name, rank, join_date) VALUES ('{$this->getName()}', '{$this->getRank()}', {$this->getJoin()});");
            $this->id = $GLOBALS['DB']->lastInsertId();
        }
    }
 ?>
