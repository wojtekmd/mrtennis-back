<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_active');
            $table->boolean('in_menu');
            $table->boolean('is_custom');
            $table->boolean('is_editable');
            $table->string('route')->unique();
            $table->json('name')->unique();
            $table->text('desc')->nullable();
            $table->timestamps();
        });

        $pages = [
            [
                'id' => 1,
                'is_active' => true,
                'in_menu' => true,
                'is_custom' => true,
                'is_editable' => false,
                'slug' => 'home',
                'route' => '',
                'name' => [
                    'pl' => 'HOME',
                    'en' => 'STARTSEITE',
                    'de' => 'HOME',
                ],
                'desc' => null,
            ],
            [
                'id' => 2,
                'is_active' => true,
                'in_menu' => true,
                'is_custom' => true,
                'is_editable' => false,
                'slug' => 'contact',
                'route' => 'kontakt',
                'name' => [
                    'pl' => 'KONTAKT',
                    'en' => 'KONTAKT',
                    'de' => 'CONTACT',
                ],
                'desc' => null,
            ],
            [
                'id' => 3,
                'is_active' => true,
                'in_menu' => true,
                'is_custom' => true,
                'is_editable' => false,
                'slug' => 'reservation',
                'route' => 'rezerwacje',
                'name' => [
                    'pl' => 'REZERWACJA',
                    'de' => 'RESERVIERUNG',
                    'en' => 'RESERVATION',
                ],
                'desc' => null,
            ],
            [
                'id' => 4,
                'is_active' => true,
                'in_menu' => true,
                'is_custom' => true,
                'is_editable' => true,
                'slug' => 'price_list',
                'route' => 'cennik',
                'name' => [
                    'pl' => 'CENNIK',
                    'de' => 'PREISLISTE',
                    'en' => 'PRICE LIST',
                ],
                'desc' => null,
            ],
            [
                'id' => 5,
                'is_active' => true,
                'in_menu' => true,
                'is_custom' => true,
                'is_editable' => true,
                'slug' => 'trainers',
                'route' => 'trenerzy',
                'name' => [
                    'pl' => 'TRENERZY',
                    'en' => 'TRAINERS',
                    'de' => 'COACHES',
                ],
                'desc' => null,
            ],
            [
                'id' => 6,
                'is_active' => true,
                'in_menu' => true,
                'is_custom' => false,
                'is_editable' => true,
                'slug' => 'trainings',
                'route' => 'treningi',
                'name' => [
                    'pl' => 'TRENINGI',
                    'en' => 'TRAININGS',
                    'de' => 'TRAININGS',
                ],
                'desc' => null,
            ],
            [
                'id' => 7,
                'is_active' => true,
                'in_menu' => true,
                'is_custom' => false,
                'is_editable' => true,
                'slug' => 'courts',
                'route' => 'korty',
                'name' => [
                    'pl' => 'KORTY',
                    'de' => 'PLÄTZE',
                    'en' => 'COURTS',
                ],
                'desc' => null,
            ],
            [
                'id' => 8,
                'is_active' => true,
                'in_menu' => true,
                'is_custom' => true,
                'is_editable' => true,
                'slug' => 'tournaments',
                'route' => 'turnieje',
                'name' => [
                    'pl' => 'TURNIEJE',
                    'de' => 'TURNIERE',
                    'en' => 'TOURNAMENTS',
                ],
                'desc' => null,
            ],
            [
                'id' => 9,
                'is_active' => true,
                'in_menu' => true,
                'is_custom' => false,
                'is_editable' => true,
                'slug' => 'facility',
                'route' => 'obiekt',
                'name' => [
                    'pl' => 'OBIEKT',
                    'de' => 'EINRICHTUNG',
                    'en' => 'FACILITY',
                ],
                'desc' => null,
            ],
            [
                'id' => 10,
                'is_active' => true,
                'in_menu' => true,
                'is_custom' => false,
                'is_editable' => true,
                'slug' => 'tennis_for_everyone',
                'route' => 'tenis-dla-kazdego',
                'name' => [
                    'pl' => 'TENIS DLA KAŻDEGO',
                    'de' => 'TENNIS FÜR JEDEN',
                    'en' => 'TENNIS FOR EVERYONE',
                ],
                'desc' => null,
            ],
            [
                'id' => 11,
                'is_active' => true,
                'in_menu' => true,
                'is_custom' => false,
                'is_editable' => true,
                'slug' => 'holidays_for_the_yongest',
                'route' => 'wakacje-dla-najmlodszych',
                'name' => [
                    'pl' => 'WAKACJE DLA NAJMŁODSZYCH',
                    'de' => 'FERIEN FÜR DIE JÜNGSTEN',
                    'en' => 'HOLIDAYS FOR THE YOUNGEST',
                ],
                'desc' => null,
            ],
            [
                'id' => 12,
                'is_active' => true,
                'in_menu' => true,
                'is_custom' => true,
                'is_editable' => true,
                'slug' => 'partners',
                'route' => 'partnerzy',
                'name' => [
                    'pl' => 'PARTNERZY',
                    'de' => 'PARTNER',
                    'en' => 'PARTNERS',
                ],
                'desc' => null,
            ],
            [
                'id' => 13,
                'is_active' => true,
                'in_menu' => true,
                'is_custom' => true,
                'is_editable' => true,
                'slug' => 'rules',
                'route' => 'regulamin',
                'name' => [
                    'pl' => 'REGULAMIN',
                    'de' => 'REGELN',
                    'en' => 'RULES',
                ],
                'desc' => null,
            ],
            [
                'id' => 14,
                'is_active' => true,
                'in_menu' => true,
                'is_custom' => true,
                'is_editable' => false,
                'slug' => 'privay_policy',
                'route' => 'polityka-prywatnosci',
                'name' => [
                    'pl' => 'POLITYKA PRYWATNOŚCI',
                    'de' => 'DATENSCHUTZ',
                    'en' => 'PRIVACY POLICY',
                ],
                'desc' => null,
            ],
            [
                'id' => 15,
                'is_active' => true,
                'in_menu' => true,
                'is_custom' => true,
                'is_editable' => false,
                'slug' => 'cookies',
                'route' => 'cookies',
                'name' => [
                    'pl' => 'COOKIES',
                    'de' => 'COOKIES',
                    'en' => 'COOKIES',
                ],
                'desc' => null,
            ],
            [
                'id' => 16,
                'is_active' => true,
                'in_menu' => false,
                'is_custom' => true,
                'is_editable' => true,
                'slug' => 'component',
                'route' => 'component',
                'name' => [
                    'pl' => 'KOMPONENTY',
                    'de' => 'COMPONENTS',
                    'en' => 'COMPONENTS',
                ],
                'desc' => 'is for components',
            ],
        ];

        foreach ($pages as $page) {
            \App\Models\Page::create($page);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
