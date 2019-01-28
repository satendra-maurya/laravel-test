<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
// use App\Http\Requests\BaseRequest;

class SettingRequest extends FormRequest
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
            'home_content' => 'required|min:3',
            'home_image' => 'sometimes|mimes:jpg,jpeg,png',
            'email_send_to' => 'required|email'
        ];
    }
}
