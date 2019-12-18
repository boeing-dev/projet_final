<?php
class Manager{
    protected function dbConnect() {
        $db = new PDO('mysql:host=localhost; dbname=burnout_life; charset=utf8', 'root', '');
        return $db;
    }
}
?>