<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTournamentControllerRequest extends FormRequest
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
            'name' => 'required|string',
            'desc' => 'required|string',
            'tournament_date' => 'required|date_format:Y-m-d',
            'tournament_place' => 'required|string',
            'tournament_img' => 'required|file',
            'max_participants' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nazwa jest wymagane',
            'name.string' => 'Nazwa musi byc tekstem',

            'desc.required' => 'Nazwa jest wymagane',
            'desc.string' => 'Nazwa musi byc tekstem',

            'tournament_date.required' => 'Data turnieju jest wymagana',
            'tournament_date.date_format' => 'Nie poprawny format daty',

            'tournament_place.required' => 'Nazwa jest wymagane',
            'tournament_place.string' => 'Nazwa musi byc tekstem',

            'tournament_img.required' => 'Zdjęcie do turnieju jest wymagane',

            'max_participants.required' => 'Musisz podać maksymalną ilość uczestników',
            'max_participants.integer' => 'Maksymalna ilość uczestników musi być liczbą',
        ];
    }
}
