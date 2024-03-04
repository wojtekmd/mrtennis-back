<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTournamentImageControllerRequest extends FormRequest
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
            'file' => 'required|file|mimes:png,jpg,jpeg,webp',
        ];
    }

    public function messages()
    {
        return [
            'file.required' => 'Musisz wgrać plik',
            'file.file' => 'Musisz wgrać plik',
        ];
    }
}
