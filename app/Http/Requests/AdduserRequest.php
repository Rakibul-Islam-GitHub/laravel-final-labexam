<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdduserRequest extends FormRequest
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
         'username' => 'required|max:15',
         'password' => 'required',
         'name' => 'required|max:20',
         'contact' => 'required|numeric',
         'type' => 'required|max:20',
        ];
    }
}
