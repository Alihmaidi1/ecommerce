<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class mall_request extends FormRequest
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
            "name"=>"required",
            "email"=>"required|email",
            "mobile"=>"required",
            "address"=>"required",
            "icon"=>"mimes:jpg,jpeg,png,gif"
        ];
    }
    public function messages()
    {
 
        return [
            "required"=>trans("messages.required"),
            "email"=>trans("messages.email"),
            "mimes"=>trans("messages.mimes")

        ];
    }
}
