<?php
/**
 * Created by PhpStorm.
 * User: sasa
 * Date: 9/28/2017
 * Time: 8:34 PM
 */

use Illuminate\Database\Capsule\Manager as Capsule;
/*
Capsule::schema()->create('orders',function($table){
    $table->increments('id');
    $table->string('title');
});
Order::create(['title'=>'asdf']);
*/

$order=new Order();
$order->title='titles';
$order->save();

dd(Order::all()->toArray());

