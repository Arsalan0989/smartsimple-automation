<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormUpdateRequest extends FormRequest
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
            'heading' => ['required', 'string', 'max:400'],
            'description' => ['string', 'max:1000'],
            'form_scope' => ['required', 'integer'],
            'form_start_date' => ['date'],
            'form_ip_access' => ['string'],
            'published' => ['required', 'integer'],
        ];
    }
}
