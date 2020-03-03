<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user_model;
class usercontroller extends Controller
{
    function getuser(request $r){
        if ($r->search!=''){
            $data['user'] = user_model::where('full','like','%'.$r->search.'%')
            ->orwhere('phone','like','%'.$r->search.'%')
            ->orwhere('address','like','%'.$r->search.'%')
            ->orwhere('id_number','like','%'.$r->search.'%')
            ->orderBy('id','desc')->paginate(10);
            return view('user', $data);
        }else{
            //$data['user'] = user_model::all(); // lấy ra tất cả bản ghi trong database
            $data['user'] = user_model::orderBy('id','desc')->paginate(10);// lấy bản ghi theo điều kiện để phân trang
            //dd($user->toarray());// hiển thi tất cả bản ghi
            return view('user',$data);
        }
    }

    function delUser($idUser){
        user_model::find($idUser)->delete();
        return redirect('/user');
    }
}
//orderBy dùng để sắp xếp
//paginate dùng để phân trang
