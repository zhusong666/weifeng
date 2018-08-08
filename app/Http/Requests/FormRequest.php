<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest as Form;

class FormRequest extends Form
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
            'admin_name' => 'required|max:16|regex:/^\w{6,16}$/',
            'admin_password' => 'required|regex:/^\w{8,12}$/',
            'admin_repass'=>'same:admin_password',
            'admin_phone'=>'required|regex:/^1[3456789]\d{9}$/'
        ];
    }

    /**
     * 获取已定义验证规则的错误消息。
     *
     * @return array
     */
    public function messages()
    {
        return [
            'admin_name.required' => '用户名不能为空',
            'admin_name.regex'=>'用户名格式不正确',
            'admin_password.required'=>'密码不能为空',
            'admin_password.regex'=>'密码格式不正确',
            'admin_repass.same'=>'两次密码不一致',
            'admin_phone.required'=>'手机号不能为空',
            'admin_phone.regex'=>'手机号码格式不正确'
        ];
    }
}
