<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\edit_user_request;
use App\user_model;

class edituser extends Controller
{
    function getedit_user($idUser) {
        $data['user'] = user_model::find($idUser);
        return view('edit_user', $data);
    }
    function postedit_user(edit_user_request $r, $idUser){
        $user = user_model::find($idUser); // Tìm đúng id mình muốn sửa
        $user->full=$r->full;
        $user->phone=$r->phone;
        $user->address=$r->address;
        $user->id_number=$r->id_number;
        $user->save();
        return redirect('/user');
    }
}
