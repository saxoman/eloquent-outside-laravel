<?php
/**
 * Created by PhpStorm.
 * User: sasa
 * Date: 9/28/2017
 * Time: 8:34 PM
 */

use  Illuminate\Database\Capsule\Manager as  Capsule;
$capsule=new Capsule();

$capsule->addConnection([
    'driver'=>'sqlite',
    'database'=>__DIR__.'/../database.sqlite'
    /*
     * $capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'database',
    'username'  => 'root',
    'password'  => 'password',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);
     * */
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();