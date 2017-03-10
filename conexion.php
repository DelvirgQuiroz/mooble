<?php
class Conexion extends mysqli {
    public function __construct() {
        $host = '127.0.0.1';
        $username = 'root';
        $password = 'Daniellugo8899';
        $dbname = 'moodle';
        $port = 3306;
        parent::__construct($host, $username, $password, $dbname, $port);
    }
}