<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePageControllerRequest extends FormRequest
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
            'name' => 'required|min:5|max:100|string|regex:/^[a-zA-Z]+$/|unique:pages,name,' . $this->pageId,
            'desc' => 'sometimes|min:5',
        ];
    }
}
