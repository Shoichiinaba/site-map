<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Customer_model extends Eloquent
{
    protected $table = 'customer';
    public $timestamps = false;
}