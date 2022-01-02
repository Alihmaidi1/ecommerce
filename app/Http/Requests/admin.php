<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Foundation\Http\Middleware\TrimStrings;

class admin extends FormRequest
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

            "name"=>"required|max:50|min:8",
            "email"=>"email|required",
            "password"=>"min:8|required",
            "confirm_password"=>"min:8|required|same:password"
        ];
    }
    public function messages()
    {
        

        return [
            "required"=>trans("messages.required"),
            "max"=>trans("messages.max"),
            "min"=>trans("messages.min"),
            "email"=>trans("messages.email")

        ];
    }
}
