<?php


use Model\OtderCrud;
use Model\UserCrud;

class Fabric
{
    private static $db;
    public static function getDB()
    {
        if(!self::$db) {
            $params = [
                'dbname' => Config::DB_NAME,
                'user' => Config::DB_USER,
                'password' => Config::DB_PASS,
                'host' => 'localhost',
                'driver' => 'pdo_mysql'
            ];
            self::$db = \Doctrine\DBAL\DriverManager::getConnection($params);
        }
        return self::$db;
    }

    public static function getOtdelCrud()
    {
        return new OtderCrud();
    }

    public static function getUserCrud()
    {
        return new UserCrud();
    }
}