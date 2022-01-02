<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class color_request extends FormRequest
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
            "color"=>"required"
        ];
    }
    public function messages()
    {
        return [

            "required"=>trans("messages.required")

        ];
    }
}
