<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\add_user_request;
use App\user_model;

class adduser extends Controller
{
    function getadd_user() {
        return view('add_user');
    }
    function postadd_user(add_user_request $r){ // hàm kiểm tra và báo lỗi
        // $r->validate(
        //     // kiểm tra
        //     // [
        //     //     'full'=>'required|min:6',
        //     //     'phone'=>'required|min:10',
        //     //     'address'=>'required|min:5',
        //     //     'id_number'=>'required|numeric|digits_between:9,12'
        //     // ],
        //     // // báo lỗi
        //     // [
        //     //     'full.required'=>'tên người dùng ko thể bỏ trống',
        //     //     'full.min'=>'tên tối thiểu có 6 ký tự',
        //     //     'phone.required'=>'số điện thoại không được bỏ trống',
        //     //     'phone.min'=>'số điện thoại ko hợp lệ',
        //     //     'address.required'=>'địa chỉ ko thể bỏ trống',
        //     //     'address.min'=>'địa chỉ phải có trên 5 ký tự',
        //     //     'id_number.required'=>'CMT ko đc bỏ trống',
        //     //     'id_number.digits_between'=>'CMT phải có từ 9 ký tự đến 12 ký tự',
        //     //     'id_number.numeric'=>'CMT không hợp lệ',

        //     // ]
        // );

        $user = new user_model; // khởi tại bản ghi mới trong database
        $user->full = $r->full; // cập nhật các trường
        $user->phone = $r->phone;
        $user->address = $r->address;
        $user->id_number = $r->id_number;
        $user ->save(); // lưu vào database
        return redirect('/user'); // trả về route
    }
}
