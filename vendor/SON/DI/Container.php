<?php
/**
 * Created by PhpStorm.
 * User: devengineer
 * Date: 03/06/18
 * Time: 13:18
 */

namespace SON\DI;


use App\Conn;

class Container
{
    public static function getModel($model)
    {
        $class = "\\App\\Models\\".ucfirst($model);
        return new $class(Conn::getDb());
    }
}