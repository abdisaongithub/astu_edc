<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StartupRequest extends FormRequest
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
            'name' => 'required|string',
            'description' => 'required|string',
            'detail' => 'required|string',
            'category' => 'required|string',

            'location' => 'sometimes|string',
            'email' => 'sometimes|string',
            'website' => 'sometimes|string',
            'slogan' => 'sometimes|string',

            'phone' => 'sometimes',
        ];
    }
}
