<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class user extends FormRequest
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
            "name"=>"required|min:8|max:50",
            "level"=>"required|in:company,user",
            "password"=>"required|min:8",
            "email"=>"required|email",
            "confirm_password"=>"required|same:password"

        ];
    }

    public function messages()
    {
        
        return [

            "required"=>trans("messages.required"),
            "max"=>trans("messages.max"),
            "min"=>trans("messages.min"),
            "email"=>trans("messages.email"),
            "same"=>trans("messages.same"),
            "in"=>trans("messages.in")

        ];
    }
}
