<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyControllerRequest extends FormRequest
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
            'about' => 'required|array',
            'about.field_name' => 'required|array',
            'about.field_name.pl' => 'required|string',
            'about.field_name.en' => 'required|string',
            'about.field_name.de' => 'required|string',
            'about.company' => 'required|array',
            'about.company.name' => 'required|string',
            'about.company.address' => 'required|string',
            'about.company.nip' => 'required|string',
            'about.company.regon' => 'required|string',
            'about.bank_account_txt' => 'required|array',
            'about.bank_account_txt.pl' => 'required|string',
            'about.bank_account_txt.en' => 'required|string',
            'about.bank_account_txt.de' => 'required|string',
            'about.bank_account_no' => 'required|string',

            'contact' => 'required|array',
            'contact.field_name' => 'required|array',
            'contact.field_name.pl' => 'required|string',
            'contact.field_name.en' => 'required|string',
            'contact.field_name.de' => 'required|string',
            'contact.emails' => 'required|array',
            'contact.emails.*' => 'required|email',
            'contact.phones' => 'required|array',
            'contact.phones.*' => 'required|integer',

            'social_medias' => 'required|array',
            'social_medias.instagram' => 'required|string',
            'social_medias.facebook' => 'required|string',

            'open_hours' => 'required|array',
            'open_hours.field_name' => 'required|array',
            'open_hours.field_name.pl' => 'required|string',
            'open_hours.field_name.en' => 'required|string',
            'open_hours.field_name.de' => 'required|string',
            'open_hours.data_txt' => 'required|array',
            'open_hours.data_txt.pl' => 'required|array',
            'open_hours.data_txt.en' => 'required|array',
            'open_hours.data_txt.de' => 'required|array',
            'open_hours.data_txt.pl.in_week' => 'required|string',
            'open_hours.data_txt.pl.in_weekend' => 'required|string',
            'open_hours.data_txt.en.in_week' => 'required|string',
            'open_hours.data_txt.en.in_weekend' => 'required|string',
            'open_hours.data_txt.de.in_week' => 'required|string',
            'open_hours.data_txt.de.in_weekend' => 'required|string',
            'values.in_week' => 'required|string',
            'values.in_weekend' => 'required|string',
        ];
    }
}
