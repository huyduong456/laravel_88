<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_model extends Model
{
    //kết nối với bảng
    protected $table='users';

    // nếu không có 2 trường timestamp (updated_at và created_at) thì phải khai báo
    // public $timetamps = false;
}
