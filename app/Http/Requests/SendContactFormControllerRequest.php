<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendContactFormControllerRequest extends FormRequest
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
            'name' => 'required|min:1|max:100|string',
            'surname' => 'required|min:1|max:100|string',
            'email' => 'required|email',
            'phoneNumber' => 'required|integer',
            'message' => 'required|string|min:5',
            'agreement' => 'required|boolean|in:1',
        ];
    }
}
