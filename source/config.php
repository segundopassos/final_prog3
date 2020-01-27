<?php

define("DATA_LAYER_CONFIG", [
    "driver" => "pgsql",
    "host" => "ec2-54-174-221-35.compute-1.amazonaws.com",
    "port" => "5432",
    "dbname" => "d1j3hh56jjsk1o",
    "username" => "axajccmichmdlc",
    "passwd" => "025b2a95ec6ef8bb7c31e8da0881c4b519078b6b5202a25f2a1f7e11c14e3bcd",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);