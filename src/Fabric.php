<?php


use Model\OtderCrud;
use Model\UserCrud;

class Fabric
{
    private static $db;
    private static $user;
    private static $otdel;
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
        if(!self::$otdel) {
            self::$otdel = new OtderCrud();
        }
        return self::$otdel;
    }

    public static function getUserCrud()
    {
        if(!self::$user) {
            self::$user = new UserCrud();
        }
        return self::$user;
    }
}