<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientStoreRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:400'],
            'organization' => ['required', 'string', 'max:400'],
            'address' => ['required', 'string', 'max:1000'],
            'country' => ['required', 'string', 'max:400'],
            'state' => ['required', 'string', 'max:400'],
            'city' => ['required', 'string', 'max:400'],
            'zipcode' => ['required', 'string', 'max:400'],
            'lat' => ['required', 'string', 'max:400'],
            'lng' => ['required', 'string', 'max:400'],
        ];
    }
}
