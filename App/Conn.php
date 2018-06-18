<?php
/**
 * Created by PhpStorm.
 * User: devengineer
 * Date: 03/06/18
 * Time: 01:23
 */

namespace App;


class Conn
{
    public static function getDb()
    {
        return new \PDO("mysql:host=localhost;dbname=mvc","root","sua senha");
    }
}

