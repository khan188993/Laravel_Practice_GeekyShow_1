<?php
/* 
request validation make korte :
*)php artisan make:request nameRequest,
*)authorize must be true to run
*)rules messages and attribures functions er bitor dibo sob and eita auto validated hobe,
*)validation er data shudu pere $request->validated() type korbo,

*/
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //true na dile unauthorize hobe,
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username'=>['required'],
            'password'=>['min:5'],
            'country' =>['required']
        ];
    }

    public function messages()
    {
        return[
            'username.required' =>':attribute ditei hobe',
            'password.min' =>':attribute boro na hole kam hobe na',
            'country.required' =>':attribute name valo kore de',
        ];
    }

    public function attributes()
    {
        return[
            'username' =>'torname',
            'password' =>'pwd_r',
        ];
    }
}
