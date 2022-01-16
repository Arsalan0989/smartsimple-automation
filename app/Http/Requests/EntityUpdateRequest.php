<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntityUpdateRequest extends FormRequest
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
            'parent_id' => ['required', 'integer'],
            'involve_client' => ['required', 'integer'],
            'has_childs' => ['required', 'integer'],
            'heading' => ['required', 'string', 'max:400'],
            'slug' => ['required', 'string', 'max:400'],
            'icon' => ['image'],
            'description' => ['string', 'max:1000'],
            'menu_title' => ['required', 'string', 'max:400'],
            'show_in_menu' => ['required', 'integer'],
            'published' => ['required', 'integer'],
            'description' => ['string', 'max:1000'],
            'menu_title' => ['required', 'string', 'max:400'],
            'show_in_menu' => ['required', 'integer'],
            'published' => ['required', 'integer'],
        ];
    }
}
