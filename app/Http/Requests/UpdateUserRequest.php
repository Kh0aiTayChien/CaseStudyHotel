<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'name'=>'required | min:6| max:30',
            'phone'=>'numeric',
            'image' => 'image',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Không được để trống',
            'name.min'=>'Tên phải lớn hơn 6 kí tự',
            'name.max'=>'Tên phải nhỏ hơn 30 kí tự',
            'phone.numeric'=>'Phải là kiểu số ',
            'image'=>'Dữ liệu nhập phải là hình có định dạng: jpeg, png, bmp, gif, svg.',
        ];
    }
}
