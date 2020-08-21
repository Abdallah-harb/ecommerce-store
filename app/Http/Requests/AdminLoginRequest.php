<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminLoginRequest extends FormRequest
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
            'email'     => 'required|email',
            'password'  => 'required|min:8|max:100',
        ];
    }

    public function messages()
    {
        return [
            'email.required'      => "البريد الالكترونى مطلوب",
            'email.email'         => "صيغه البريد الألكترونى غير صحيحه",
            'password.required'   => "كلمه السر مطلوبه",
            'password.min'        => "الحد الأدنى لكلمه السر 8 أحرف",
            'password.max'        => "الحد الأقصى لكلمه السر 100 حرف",
        ];
    }
}
