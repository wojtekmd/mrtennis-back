<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IndexPageControllerRequest extends FormRequest
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
            'in_menu' => 'sometimes|boolean'
        ];
    }

    public function messages()
    {
        return [
            'is_menu.sometimes' => 'Filtr czy strona jest w menu głównym nie jest zawsze wymagany',
            'is_menu.boolean' => 'Wartość filtru musi byc wartością logiczną (0/1)',
        ];
    }
}
