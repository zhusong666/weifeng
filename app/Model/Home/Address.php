<?php

namespace App\Model\Home;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'wf_user_address';
    protected $primaryKey = 'address_id';
    public $timestamps = false;

    //可以被赋值的属性
    // protected $fillable = ['uid','address_name','address_phone','address_sheng','address_shi','address_xian','address_details','address_zcode'];


}
