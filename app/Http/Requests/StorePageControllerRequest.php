<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePageControllerRequest extends FormRequest
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
            'is_active' => 'required|boolean',
            'in_menu' => 'required|boolean',
            'is_custom' => 'required|boolean|in:1',
            'route' => 'required|min:5|max:100|string|regex:/^[a-zA-Z]+$/|unique:pages,route',
            'name' => 'required|min:5|max:100|string|regex:/^[a-zA-Z]+$/unique:pages,name',
            'desc' => 'sometimes|min:5',
        ];
    }
}
