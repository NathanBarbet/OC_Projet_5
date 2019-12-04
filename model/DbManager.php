<?php

class DbManager
{
    protected function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=oc_projet_5;charset=utf8', 'root', '');
        return $db;
    }
}
