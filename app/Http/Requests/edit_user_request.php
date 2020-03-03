<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class edit_user_request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'full'=>'required|min:6',
            'phone'=>'required|min:10|unique:users,phone,'.$this->idUser,  //điều kiện:tên bảng,trường dữ liệu // $this->idUser => không check sdt ở ô mình đang sửa
            'address'=>'required|min:5',
            'id_number'=>'required|numeric|digits_between:9,12'
        ];
    }
    public function messages(){
        return[
         'full.required'=>'tên người dùng ko thể bỏ trống',
         'full.min'=>'tên tối thiểu có 6 ký tự',
         'phone.unique'=>'SDT đã tồn tại',
         'phone.required'=>'số điện thoại không được bỏ trống',
         'phone.min'=>'số điện thoại ko hợp lệ',
         'address.required'=>'địa chỉ ko thể bỏ trống',
         'address.min'=>'địa chỉ phải có trên 5 ký tự',
         'id_number.required'=>'CMT ko đc bỏ trống',
         'id_number.digits_between'=>'CMT phải có từ 9 ký tự đến 12 ký tự',
         'id_number.numeric'=>'CMT không hợp lệ',
        ];

     }
}
