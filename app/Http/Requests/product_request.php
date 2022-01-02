<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class product_request extends FormRequest
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

            "title"=>"required",
            "content"=>"required",
            "department"=>"required",
            "photo"=>"mimes:jpg,jpeg,png,gif",
            "price"=>"required|integer",
            "numbers"=>"required|integer",
            "start_at"=>"required|date",
            "end_at"=>"required|date",
            "price_offer"=>"required|integer",
            "start_offer_at"=>"required|date",
            "end_offer_at"=>"required|date",
            "status"=>"required|in:active,waiting,ending",
            "size_id"=>"required",
            "size"=>"required|integer",
            "weight"=>"required|integer",
            "color_id"=>"required",
            "factory_id"=>"required"
        ];
    }

    public function messages()
    {
      return [
        "required"=>trans("messages.required"),
        "integer"=>trans("messages.integer"),
        "mimes"=>trans("messages.mimes"),
        "in"=>trans("messages.in"),
        "date"=>trans("messages.date")

      ];

    }
}
