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

    public function messages()
    {
        return [
            'name.required' => 'Imię jest wymagane',
            'name.min' => 'Imię musi zawierać conajmniej :min znaków',
            'name.max' => 'Imię może zawierać maksymalnie :max znaków',
            'name.string' => 'Imię musi być tekstem',

            'surname.required' => 'Nazwisko jest wymagane',
            'surname.min' => 'Nazwisko musi zawierać conajmniej :min znaków',
            'surname.max' => 'Nazwisko może zawierać maksymalnie :max znaków',
            'surname.string' => 'Nazwisko musi być tekstem',

            'email.required' => 'Adres email jest wymagany',
            'email.email' => 'Podany adres emial jest nie poprawny',

            'phoneNumber.required' => 'Numer telefonu jest wymagany',
            'phoneNumber.integer' => 'Numer teleofnu może zawierać tylko liczby',

            'message.required' => 'Treść wiadomości jest wymagana',
            'message.min' => 'Treść wiadomości musi zawierać conajmniej :min znaków',
            'message.string' => 'Treść wiadomości musi być tekstem',

            'agreement.required' => 'Aby wysłać wiadomość musisz zaakceptować zgodę na przetwrzanie danych osobowych',
            'agreement.boolean' => 'Aby wysłać wiadomość musisz zaakceptować zgodę na przetwrzanie danych osobowych',
            'agreement.in' => 'Aby wysłać wiadomość musisz zaakceptować zgodę na przetwrzanie danych osobowych',
        ];
    }
}
