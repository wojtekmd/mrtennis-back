<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTournamentControllerRequest extends FormRequest
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
            'name' => 'required|array',
            'name.pl' => 'required|string',
            'name.en' => 'required|string',
            'name.de' => 'required|string',
            'desc' => 'required|array',
            'desc.pl' => 'required|string',
            'desc.en' => 'required|string',
            'desc.de' => 'required|string',
            'tournament_date' => 'required|date_format:Y-m-d',
            'tournament_place' => 'required|string',
            'tournament_img' => 'required|url',
            'max_participants' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nazwa jest wymagane',
            'name.pl.required' => 'Nazwa jest wymagane',
            'name.en.required' => 'Nazwa jest wymagane',
            'name.de.required' => 'Nazwa jest wymagane',

            'desc.required' => 'Opis jest wymagany',
            'desc.pl.required' => 'Opis jest wymagany',
            'desc.en.required' => 'Opis jest wymagany',
            'desc.de.required' => 'Opis jest wymagany',

            'tournament_date.required' => 'Data turnieju jest wymagana',
            'tournament_date.date_format' => 'Nie poprawny format daty',

            'tournament_place.required' => 'Nazwa jest wymagane',
            'tournament_place.string' => 'Nazwa musi byc tekstem',

            'tournament_img.required' => 'Zdjęcie do turnieju jest wymagane',
            'tournament_img.url' => 'Podaj link do zdjęcia',

            'max_participants.required' => 'Musisz podać maksymalną ilość uczestników',
            'max_participants.integer' => 'Maksymalna ilość uczestników musi być liczbą',
        ];
    }
}
