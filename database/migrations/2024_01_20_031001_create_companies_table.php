<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->json('about');
            $table->json('contact');
            $table->json('social_media');
            $table->json('open_hours');
            $table->timestamps();
        });

        $data = [
            'about' => [
                'field_name' => [
                    'pl' => 'Dane firmy',
                    'en' => 'Company Details',
                    'de' => 'Firmendetails',
                ],
                'company' => [
                    'name' => 'Baltic Tennis Club',
                    'address' => 'ul. Sikorskiego 1, 78-100 Kołobrzeg, Polska',
                    'nip' => '6711858306',
                    'regon' => '526794100',
                    'bank_account_txt' => [
                        'pl' => 'Konto bankowe',
                        'en' => 'Bank Account',
                        'de' => 'Bankkonto',
                    ],
                    'bank_account_no' => 'PKO BP 54 1020 2821 0000 1402 0196 3206 '
                ]
            ],
            'contact' => [
                'field_name' => [
                    'pl' => 'Kontakt',
                    'en' => 'Contact',
                    'de' => 'Kontakt',
                ],
                'emails' => ['biuro@baltictennisclub.com'],
                'phones' => ['665010000']
            ],
            'social_media' => [
                'instagram' => 'https://instagram.com/baltic_tennis_club_kolobrzeg?igshid=OGQ5ZDc2ODk2ZA==',
                'facebook' => 'https://www.facebook.com/profile.php?id=61552924718767',
            ],
            'open_hours' => [
                'field_name' => [
                    'pl' => 'Godziny otwarcia',
                    'en' => 'Opening Hours',
                    'de' => 'Öffnungszeiten',
                ],
                'data_txt' => [
                    'pl' => ['in_week' => 'Pon. - Pt.', 'in_weekend' => 'Sob. - Nd.'],
                    'en' => ['in_week' => 'Mon. - Fri.', 'in_weekend' => 'Sat. - Sun.'],
                    'de' => ['in_week' => 'Mo. - Fr.', 'in_weekend' => 'Sa. - So.'],
                ],
                'values' => [
                    'in_week' => '06:00-24:00',
                    'in_weekend' => '06:00-24:00',
                ]
            ],
        ];

        \App\Models\Company::create($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
