<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class todolist_request extends FormRequest
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
     
            "content"=>"required",
            "end_at"=>"required|date"
        ];
    }

    public function messages()
    {
        
        return [

            "required"=>trans("messages.required"),
            "date"=>trans("messages.date")

        ];


    }
}
