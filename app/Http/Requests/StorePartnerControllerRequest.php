<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePartnerControllerRequest extends FormRequest
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
//            'order' => 'required|integer|unique:partners,order',
            'name' => 'required|min:2|max:100|string',
            'img' => 'required|string|url',
            'desc' => 'sometimes|min:2',
        ];
    }

    public function messages()
    {
        return [
            'order.required' => 'Numer w kolejnosci jest wymagany',
            'order.integer' => 'Numer w kolejności musi być liczbą',
            'order.unique' => 'Numer w kolejności musi być unikalny',

            'name.required' => 'Nazwa jest wymagane',
            'name.min' => 'Nazwa musi zawierać conajmniej :min znaków',
            'name.max' => 'Nazwa może zawierać maksymalnie :max znaków',
            'name.string' => 'Nazwa musi byc tekstem',

            'img.required' => 'Musisz podać link do logo partnera',
            'img.url' => 'Musisz podać link do logo partnera',

            'desc.min' => 'Opis musi zawierać conajmniej :min znaków',
        ];
    }
}
