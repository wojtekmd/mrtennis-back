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
            'is_custom' => 'required|boolean|in:0',
            'is_editable' => 'required|boolean|in:1',
            'name' => 'required|array',
            'name.pl' => 'required|min:3|max:100|string|regex:/^[a-zA-Z]+$/',
            'name.en' => 'required|min:3|max:100|string|regex:/^[a-zA-Z]+$/',
            'name.de' => 'required|min:3|max:100|string|regex:/^[a-zA-Z]+$/',
            'desc' => 'sometimes|min:5',
        ];
    }

    public function messages()
    {
        return [
            'is_active.required' => 'Oznacz czy strona jest aktywna',
            'in_menu.required' => 'Oznacz czy strona ma pojawić się w menu',
            'is_custom.required' => 'Strona może być tylko w standardowym formacie',
            'is_editable.required' => 'Strona musi być do edycji',

            'route.required' => 'Route jest wymagane',
            'route.min' => 'Route musi zawierać conajmniej :min znaków',
            'route.max' => 'Route może zawierać maksymalnie :max znaków',
            'route.string' => 'Route musi byc tekstem',
            'route.regex' => 'Route może zaiwerać tylko liter',
            'route.unique' => 'Route musi być unikalna',

            'name.required' => 'Nazwa jest wymagane',
            'name.min' => 'Nazwa musi zawierać conajmniej :min znaków',
            'name.max' => 'Nazwa może zawierać maksymalnie :max znaków',
            'name.string' => 'Nazwa musi byc tekstem',
            'name.regex' => 'Nazwa może zaiwerać tylko liter',
            'name.unique' => 'Nazwa musi być unikalna',

            'desc.min' => 'Opis musi zawierać conajmniej :min znaków',
        ];
    }
}
