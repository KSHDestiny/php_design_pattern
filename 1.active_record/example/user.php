<?php

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

class User extends Illuminate\Database\Eloquent\Model
{
    protected $primaryKey = 'user_id';

    public function __construct()
    {
        $capsule = new Capsule;
        $capsule->addConnection([
            "driver"    => "mysql",
            "host"      => "localhost",
            "database"  => "development",
            "username"  => "developer",
            "password"  => "developer",
            "charset"   => "utf8",
            "collation" => "utf8_general_ci",
            "prefix"    => ""
        ]);

        $capsule->setEventDispatcher(new Dispatcher(new Container));
        $capsule->bootEloquent();
    }
}