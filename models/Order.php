<?php
/**
 * Created by PhpStorm.
 * User: sasa
 * Date: 9/28/2017
 * Time: 8:39 PM
 */
use Illuminate\Database\Eloquent\Model as Eloquent;

class  Order extends Eloquent{
    protected $fillable=['title'];
    public $timestamps = false;

}