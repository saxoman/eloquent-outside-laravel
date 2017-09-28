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
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();