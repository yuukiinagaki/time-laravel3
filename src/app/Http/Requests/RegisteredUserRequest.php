<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisteredUserRequest extends FormRequest
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
            'name'=>'required','string',
            'email'=>'required','email',
            'password'=>'required','max:191'
        ];
    }
    public function messages()
  {
    return [
      'name.required' => '名前を入力してください',
      'name.string' =>'文字列を入力してください',
      'email.required' =>'メールアドレスを入力してください', 
      'email.email' =>'emailの形式で入力してください',
      'password.required' =>'パスワードを入力して下さい',
      'password.max' =>'パスワードは191文字以内にしてください',
    ];
  }
}
