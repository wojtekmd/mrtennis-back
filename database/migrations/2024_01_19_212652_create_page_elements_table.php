<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_elements', function (Blueprint $table) {
            $table->id();
            $table->integer('page_id');
            $table->boolean('is_active');
            $table->string('slug');
            $table->json('content');
            $table->timestamps();
        });

        $pageElements = [
            //HOME
            [
                'page_id' => 1,
                'is_active' => true,
                'slug' => 'dynamic_info_card',
                'content' => [
                    [
                        'order' => 1,
                        'is_active' => true,
                        'icon' => 'map',
                        'title' => [
                            'pl' => 'ATRAKCYJNA LOKALIZACJA',
                            'en' => 'ATTRACTIVE LOCATION',
                            'de' => 'ATTRAKTIVE LAGE',
                        ],
                        'desc' => [
                            'pl' => 'Blisko urokliwego Morza Bałtyckiego oraz Parku Nadmorskiego, oferujemy korty o najwyższej jakości nawierzchni.',
                            'en' => 'Close to the charming Baltic Sea and Coastal Park, we offer courts with the highest quality surface.',
                            'de' => 'In der Nähe der reizvollen Ostsee und des Küstenparks bieten wir Plätze mit der höchsten Qualitätsfläche.',
                        ]
                    ],
                    [
                        'order' => 2,
                        'is_active' => true,
                        'icon' => 'groups',
                        'title' => [
                            'pl' => 'TENIS DLA WSZYSTKICH',
                            'en' => 'TENNIS FOR EVERYONE',
                            'de' => 'TENNIS FÜR JEDEN',
                        ],
                        'desc' => [
                            'pl' => 'Zagraj w tenisa bez względu na wiek i umiejętności. Wynajem kortu a może lekcja tenisa z trenerem?',
                            'en' => 'Play tennis regardless of age and skill level. Court rental or maybe a tennis lesson with a coach?',
                            'de' => 'Spielen Sie Tennis unabhängig von Alter und Fähigkeiten. Platzmiete oder vielleicht eine Tennisstunde mit einem Trainer?',
                        ]
                    ],
                    [
                        'order' => 3,
                        'is_active' => true,
                        'icon' => 'health_and_safety',
                        'title' => [
                            'pl' => 'AKTYWNY WYPOCZYNEK',
                            'en' => 'ACTIVE LEISURE',
                            'de' => 'AKTIVE FREIZEIT',
                        ],
                        'desc' => [
                            'pl' => 'Dla najmłodszych proponujemy niezapomniane letnie i zimowe półkolonie tenisowe - pełne aktywności fizycznej, nauki tenisa i rozrywki.',
                            'en' => 'For the youngest, we propose unforgettable summer and winter tennis day camps - full of physical activity, tennis learning, and entertainment.',
                            'de' => 'Für die Jüngsten bieten wir unvergessliche Sommer- und Winter-Tennistageslager - voller körperlicher Aktivität, Tennislernen und Unterhaltung.',
                        ]
                    ],
                    [
                        'order' => 4,
                        'is_active' => true,
                        'icon' => 'handyman',
                        'title' => [
                            'pl' => 'SERWIS',
                            'en' => 'SERVICE',
                            'de' => 'SERVICE',
                        ],
                        'desc' => [
                            'pl' => 'Świadczymy usługi serwisowania rakiet oraz mamy bogaty wybór akcesoriów tenisowych.',
                            'en' => 'We provide racket servicing services and have a rich selection of tennis accessories.',
                            'de' => 'Wir bieten Schläger-Serviceleistungen und haben eine reiche Auswahl an Tenniszubehör.',
                        ]
                    ],
                    [
                        'order' => 5,
                        'is_active' => true,
                        'icon' => 'accessibility',
                        'title' => [
                            'pl' => 'DOSTEPNOŚĆ',
                            'en' => 'AVAILABILITY',
                            'de' => 'VERFÜGBARKEIT',
                        ],
                        'desc' => [
                            'pl' => 'Cały rok grania na 6 ziemnych kortach i 2 ogrzewanych krytych.',
                            'en' => 'Year-round play on 6 clay courts and 2 heated indoors.',
                            'de' => 'Ganzjähriges Spielen auf 6 Sandplätzen und 2 beheizten Innenplätzen.',
                        ]
                    ],
                    [
                        'order' => 6,
                        'is_active' => true,
                        'icon' => 'sports_baseball',
                        'title' => [
                            'pl' => 'ROZGRYWKI',
                            'en' => 'COMPETITIONS',
                            'de' => 'WETTBEWERBE',
                        ],
                        'desc' => [
                            'pl' => 'Turnieje amatorskie i zawodnicze. Kołobrzeska Liga Tenisa dla dorosłych i Międzyszkolna dla dzieci.',
                            'en' => 'Amateur and competitive tournaments. Kołobrzeg Tennis League for adults and Inter-school League for children.',
                            'de' => 'Amateur- und Wettkampfturniere. Kołobrzeg Tennis League für Erwachsene und Inter-School League für Kinder.',
                        ]
                    ],
                    [
                        'order' => 7,
                        'is_active' => true,
                        'icon' => 'sports_tennis',
                        'title' => [
                            'pl' => 'SZKOLENIE',
                            'en' => 'TRAINING',
                            'de' => 'AUSBILDUNG',
                        ],
                        'desc' => [
                            'pl' => 'Nasi doświadczeni trenerzy oferują zarówno zajęcia indywidualne, jak i grupowe, dopasowane do indywidualnych celów i poziomu umiejętności.',
                            'en' => 'Our experienced coaches offer both individual and group sessions tailored to individual goals and skill levels.',
                            'de' => 'Unsere erfahrenen Trainer bieten sowohl individuelle als auch Gruppenstunden, die auf individuelle Ziele und Fähigkeiten zugeschnitten sind.',
                        ]
                    ],
                ],
            ],
            [
                'page_id' => 1,
                'is_active' => true,
                'slug' => 'content_first_text',
                'content' => [
                    'pl' => 'Nasze korty czekają na Ciebie',
                    'en' => 'Our tennis courts awaits you',
                    'de' => 'Unsere Tennisplätze erwarten Sie',
                ],
            ],
            [
                'page_id' => 1,
                'is_active' => true,
                'slug' => 'content_image_cards',
                'content' => [
                    [
                        'img' => '/gallery/11.jpg',
                        'title' => [
                            'pl' => 'Turnieje',
                            'en' => 'Tournaments',
                            'de' => 'Turniere',
                        ]
                    ],
                    [
                        'img' => '/gallery/3.webp',
                        'title' => [
                            'pl' => 'Korty',
                            'en' => 'Courts',
                            'de' => 'Plätze',
                        ]
                    ],
                    [
                        'img' => '/gallery/5.webp',
                        'title' => [
                            'pl' => 'Kadra trenerska',
                            'en' => 'Coaching Staff',
                            'de' => 'Trainer-Team',
                        ]
                    ]
                ],
            ],
            [
                'page_id' => 1,
                'is_active' => true,
                'slug' => 'content_desc',
                'content' => [
                    'img' => '/gallery/6.webp',
                    'title' => [
                        'pl' => 'Baltic Tennis Club Kołobrzeg',
                        'en' => 'Baltic Tennis Club Kołobrzeg',
                        'de' => 'Baltic Tennis Club Kołobrzeg',
                    ],
                    'desc' => [
                        'pl' => 'Zapraszamy do odkrycia Baltic Tennis Club Kołobrzeg - miejsca, gdzie pasja do tenisa łączy się z promocją zdrowego stylu życia! Niezależnie od wieku czy umiejętności, nasze lekcje dopasowane są do każdego - od początkujących po zaawansowanych graczy. Zlokalizowani blisko urokliwego Morza Bałtyckiego oraz Parku Nadmorskiego, oferujemy korty o najwyższej jakości nawierzchni. Dla najmłodszych proponujemy niezapomniane letnie półkolonie tenisowe - pełne aktywności fizycznej, nauki tenisa i rozrywki. Bez względu na porę roku, nasze korty są dostępne - latem na świeżym powietrzu, zimą zadaszone, zapewniając najlepszą jakość gry. A co więcej, u nas znajdziesz sprzęt tenisowy do sprzedaży i wynajmu. Nasi doświadczeni trenerzy oferują zarówno zajęcia indywidualne, jak i grupowe, dopasowane do indywidualnych celów i poziomu umiejętności. Dodatkowo, świadczymy usługi serwisowania rakiet oraz mamy bogaty wybór akcesoriów tenisowych, by zapewnić kompleksową satysfakcję naszym graczom. Przyjdź i poznaj naszą pasję do tenisa!',
                        'en' => 'Welcome to discover Baltic Tennis Club Kołobrzeg - a place where the passion for tennis meets the promotion of a healthy lifestyle! Regardless of age or skill level, our lessons are tailored to everyone - from beginners to advanced players. Located near the charming Baltic Sea and Coastal Park, we offer courts with the highest quality surface. For the youngest, we propose unforgettable summer tennis day camps - full of physical activity, tennis learning, and entertainment. Regardless of the season, our courts are available - outdoor in the summer, covered in winter, ensuring the best quality of play. Whats more, youll find tennis equipment for sale and rent with us. Our experienced coaches offer both individual and group sessions tailored to individual goals and skill levels. Additionally, we provide racket servicing services and have a rich selection of tennis accessories to ensure comprehensive satisfaction for our players. Come and discover our passion for tennis!',
                        'de' => 'Willkommen, um den Baltic Tennis Club Kołobrzeg zu entdecken - ein Ort, an dem die Leidenschaft für Tennis auf die Förderung eines gesunden Lebensstils trifft! Unabhängig vom Alter oder Können sind unsere Unterrichtsstunden auf jeden zugeschnitten - vom Anfänger bis zum fortgeschrittenen Spieler. In der Nähe der reizvollen Ostsee und des Küstenparks bieten wir Plätze mit der höchsten Qualitätsfläche. Für die Jüngsten bieten wir unvergessliche Sommer-Tennistageslager - voller körperlicher Aktivität, Tennislernen und Unterhaltung. Unabhängig von der Jahreszeit sind unsere Plätze verfügbar - im Sommer im Freien, im Winter überdacht und bieten so die beste Spielqualität. Darüber hinaus finden Sie bei uns Tennisgeräte zum Verkauf und zur Vermietung. Unsere erfahrenen Trainer bieten sowohl individuelle als auch Gruppenstunden, die auf individuelle Ziele und Fähigkeiten zugeschnitten sind. Darüber hinaus bieten wir Schläger-Serviceleistungen an und haben eine reiche Auswahl an Tenniszubehör, um umfassende Zufriedenheit für unsere Spieler zu gewährleisten. Kommen Sie und entdecken Sie unsere Leidenschaft für Tennis!',
                    ]
                ],
            ],

            //CONTACT
            [
                'page_id' => 2,
                'is_active' => true,
                'slug' => 'img',
                'content' => ['url' => '/gallery/7.webp'],
            ],
            [
                'page_id' => 2,
                'is_active' => true,
                'slug' => 'img_first_text',
                'content' => [
                    'pl' => 'Masz pytania? Napisz',
                    'en' => 'Do you have questions? Write to us',
                    'de' => 'Haben Sie Fragen? Schreiben Sie uns',
                ],
            ],
            [
                'page_id' => 2,
                'is_active' => true,
                'slug' => 'img_second_text',
                'content' => [
                    'pl' => 'Wypełnij formularz, a nasz zespół skontaktuje się z Tobą w ciągu 24 godzin.',
                    'en' => 'Fill out the form, and our team will contact you within 24 hours.',
                    'de' => 'Füllen Sie das Formular aus, und unser Team wird sich innerhalb von 24 Stunden bei Ihnen melden.',
                ],
            ],
            [
                'page_id' => 2,
                'is_active' => true,
                'slug' => 'form',
                'content' => [
                    'nameCF' => [
                        'value' => 'nameCF',
                        'title' => [
                            'pl' => 'Imię',
                            'en' => 'First Name',
                            'de' => 'Vorname',
                        ],
                    ],
                    'surnameCF' => [
                        'value' => 'surnameCF',
                        'title' => [
                            'pl' => 'Nazwisko',
                            'en' => 'Last Name',
                            'de' => 'Nachname',
                        ],
                    ],
                    'emailCF' => [
                        'value' => 'emailCF',
                        'title' => [
                            'pl' => 'Email',
                            'en' => 'Email',
                            'de' => 'E-Mail',
                        ],
                    ],
                    'phoneNumberCF' => [
                        'value' => 'phoneNumberCF',
                        'title' => [
                            'pl' => 'Numer telefonu',
                            'en' => 'Phone Number',
                            'de' => 'Telefonnummer',
                        ],
                    ],
                    'messageCF' => [
                        'value' => 'messageCF',
                        'title' => [
                            'pl' => 'Wiadomość',
                            'en' => 'Message',
                            'de' => 'Nachricht',
                        ],
                        'placeholder' => [
                            'pl' => 'Treść',
                            'en' => 'Content',
                            'de' => 'Inhalt',
                        ],
                    ],
                ],
            ],
            [
                'page_id' => 2,
                'is_active' => true,
                'slug' => 'form_agreement',
                'content' => [
                    'pl' => 'Wyrażam zgodę na przetwarzanie moich danych osobowych podanych w powyższym formularzu w celach handlowych i marketingowych przez Baltic Tennis Club oraz przez podmioty trzecie.',
                    'en' => 'I consent to the processing of my personal data provided in the above form for commercial and marketing purposes by Baltic Tennis Club and third parties.',
                    'de' => 'Ich stimme der Verarbeitung meiner im obigen Formular angegebenen personenbezogenen Daten zu Handels- und Marketingzwecken durch den Baltic Tennis Club und Dritte zu.',
                ],
            ],
            [
                'page_id' => 2,
                'is_active' => true,
                'slug' => 'form_button_send',
                'content' => [
                    'pl' => 'Wyślij wiadomość',
                    'en' => 'Send Message',
                    'de' => 'Nachricht senden',
                ],
            ],
            [
                'page_id' => 2,
                'is_active' => true,
                'slug' => 'status_send_message',
                'content' => [
                    'ok' => [
                        'pl' => 'Wiadomość została wysłana',
                        'en' => 'Message sent successfully',
                        'de' => 'Nachricht erfolgreich gesendet',
                    ],
                    'error' => [
                        'pl' => 'Wiadomość nie została wysłana',
                        'en' => 'Message not sent',
                        'de' => 'Nachricht nicht gesendet',
                    ]
                ],
            ],

            //PRICE LIST
            [
                'page_id' => 4,
                'is_active' => true,
                'slug' => 'main_price_list',
                'content' => [
                    'title' => [
                        'pl' => 'CENNIK WYNAJMU KORTU - SEZON ZIMOWY LISTOPAD-MARZEC',
                        'en' => 'PRICE LIST FOR COURT RENTAL - WINTER SEASON NOVEMBER-MARCH',
                        'de' => 'PREISLISTE FÜR PLATZMIETE - WINTERSAISON NOVEMBER-MÄRZ',
                    ],
                    'headers' => [
                        [
                            'pl' => 'Cena za 1h',
                            'en' => 'Price for 1h',
                            'de' => 'Preis für 1h',
                        ],
                        [
                            'pl' => 'Standard',
                            'en' => 'Standard',
                            'de' => 'Standard',
                        ],
                        [
                            'pl' => 'Karta Baltic Tennis Club',
                            'en' => 'Baltic Tennis Club Card',
                            'de' => 'Baltic Tennis Club Karte',
                        ]
                    ],
                    'values' => [
                        [
                            [
                                'pl' => '6:00-15:00',
                                'en' => '6:00-15:00',
                                'de' => '6:00-15:00',
                            ],
                            [
                                'pl' => '100,00 zł',
                                'en' => '100,00 zł',
                                'de' => '100,00 zł',
                            ],
                            [
                                'pl' => '70,00 zł',
                                'en' => '70,00 zł',
                                'de' => '70,00 zł',
                            ],
                        ],
                        [
                            [
                                'pl' => '15:00-24:00',
                                'en' => '15:00-24:00',
                                'de' => '15:00-24:00',
                            ],
                            [
                                'pl' => '145,00 zł',
                                'en' => '145,00 zł',
                                'de' => '145,00 zł',
                            ],
                            [
                                'pl' => '100,00 zł',
                                'en' => '100,00 zł',
                                'de' => '100,00 zł',
                            ],
                        ],
                        [
                            [
                                'pl' => 'WEEKENDY',
                                'en' => 'WEEKENDS',
                                'de' => 'Wochenenden',
                            ],
                            [
                                'pl' => '145,00 zł',
                                'en' => '145,00 zł',
                                'de' => '145,00 zł',
                            ],
                            [
                                'pl' => '100,00 zł',
                                'en' => '100,00 zł',
                                'de' => '100,00 zł',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'page_id' => 4,
                'is_active' => true,
                'slug' => 'first_group_price_list',
                'content' => [
                    'title' => [
                        'pl' => 'CENNIK ZAJĘC GRUPOWYCH 2023/2024 <br/> GRUPA 3-4 OSOB',
                        'en' => 'GROUP CLASSES PRICE LIST 2023/2024 <br/> GROUP OF 3-4 PEOPLE',
                        'de' => 'PREISLISTE FÜR GRUPPENKURSE 2023/2024 <br/> GRUPPE VON 3-4 PERSONEN',
                    ],
                    'headers' => [
                        [
                            'pl' => 'Jednorazowo (60 zł)',
                            'en' => 'One-time (60 zł)',
                            'de' => 'Einmalig (60 zł)',
                        ],
                        [
                            'pl' => 'Miesięcznie',
                            'en' => 'Monthly',
                            'de' => 'Monatlich',
                        ],
                    ],
                    'values' => [
                        [
                            [
                                'pl' => '1 h tygodniowo (60 zł)',
                                'en' => '1 h Weekly (60 zł)',
                                'de' => '1 h Wöchentlich (60 zł)',
                            ],
                            [
                                'pl' => '190,00 zł',
                                'en' => '190,00 zł',
                                'de' => '190,00 zł',
                            ],
                        ],
                        [
                            [
                                'pl' => '1,5 h tygodniowo (50 zł)',
                                'en' => '1,5 h Weekly (50 zł)',
                                'de' => '1,5 h Wöchentlich (50 zł)',
                            ],
                            [
                                'pl' => '285,00 zł',
                                'en' => '285,00 zł',
                                'de' => '285,00 zł',
                            ],
                        ],
                        [
                            [
                                'pl' => '2 h tygodniowo (45 zł)',
                                'en' => '2 h Weekly (45 zł)',
                                'de' => '2 h Wöchentlich (45 zł)',
                            ],
                            [
                                'pl' => '340,00 zł',
                                'en' => '340,00 zł',
                                'de' => '340,00 zł',
                            ],
                        ],
                        [
                            [
                                'pl' => '3 h tygodniowo (45 zł)',
                                'en' => '3 h Weekly (45 zł)',
                                'de' => '3 h Wöchentlich (45 zł)',
                            ],
                            [
                                'pl' => '510,00 zł',
                                'en' => '510,00 zł',
                                'de' => '510,00 zł',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'page_id' => 4,
                'is_active' => true,
                'slug' => 'second_group_price_list',
                'content' => [
                    'title' => [
                        'pl' => 'CENNIK ZAJĘC GRUPOWYCH 2023/2024 <br/> GRUPA 5-6 OSÓB',
                        'en' => 'GROUP CLASSES PRICE LIST 2023/2024 <br/> GROUP OF 5-6 PEOPLE',
                        'de' => 'PREISLISTE FÜR GRUPPENKURSE 2023/2024 <br/> GRUPPE VON 5-6 PERSONEN',
                    ],
                    'headers' => [
                        [
                            'pl' => 'Jednorazowo (55 zł)',
                            'en' => 'One-time (55 zł)',
                            'de' => 'Einmalig (55 zł)',
                        ],
                        [
                            'pl' => 'Miesięcznie',
                            'en' => 'Monthly',
                            'de' => 'Monatlich',
                        ],
                    ],
                    'values' => [
                        [
                            [
                                'pl' => '1 h tygodniowo (55 zł)',
                                'en' => '1 h Weekly (55 zł)',
                                'de' => '1 h Wöchentlich (55 zł)',
                            ],
                            [
                                'pl' => '170,00 zł',
                                'en' => '170,00 zł',
                                'de' => '170,00 zł',
                            ],
                        ],
                        [
                            [
                                'pl' => '1,5 h tygodniowo (45 zł)',
                                'en' => '1,5 h Weekly (45 zł)',
                                'de' => '1,5 h Wöchentlich (45 zł)',
                            ],
                            [
                                'pl' => '255,00 zł',
                                'en' => '255,00 zł',
                                'de' => '255,00 zł',
                            ],
                        ],
                        [
                            [
                                'pl' => '2 h tygodniowo (40 zł)',
                                'en' => '2 h Weekly (40 zł)',
                                'de' => '2 h Wöchentlich (40 zł)',
                            ],
                            [
                                'pl' => '305,00 zł',
                                'en' => '305,00 zł',
                                'de' => '305,00 zł',
                            ],
                        ],
                        [
                            [
                                'pl' => '3 h tygodniowo (40 zł)',
                                'en' => '3 h Weekly (40 zł)',
                                'de' => '3 h Wöchentlich (40 zł)',
                            ],
                            [
                                'pl' => '455,00 zł',
                                'en' => '455,00 zł',
                                'de' => '455,00 zł',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'page_id' => 4,
                'is_active' => true,
                'slug' => 'information_about_price_list_main',
                'content' => [
                    'pl' => '* Zastrzegamy sobie prawo do zaokrąglania cen w naszym cenniku<br/>* Cennik obowiązuje na hali od 01.11.2023 do 30.04.2024<br/>* Cena w tabeli dotyczy jednej godziny wynajmu kort<br/>* Każdy trening indywidualny trwa 60 minut.<br/>* Cennik nie dotyczy zorganizowanych imprez sportowych i turniejów<br/>* Warunkiem uczestnictwa w zajęciach jest akceptacja regulaminu.<br/>* Opłaty za wstęp do obiektu sportowego i zajęcia z trenerem będą przyjmowane w biurze kortów ( płatność kartą, gotówką)',
                    'en' => '* We reserve the right to round prices in our price list<br/>* The price list is valid in the hall from 01.11.2023 to 30.04.2024<br/>* The price in the table refers to one hour of court rental<br/>* Each individual training lasts 60 minutes.<br/>* The price list does not apply to organized sports events and tournaments<br/>* Participation in classes is subject to acceptance of the regulations.<br/>* Fees for entry to the sports facility and training with the coach will be accepted at the court office (payment by card, cash)',
                    'de' => '* Wir behalten uns das Recht vor, die Preise in unserer Preisliste zu runden<br/>* Die Preisliste ist in der Halle vom 01.11.2023 bis 30.04.2024 gültig<br/>* Der Preis in der Tabelle bezieht sich auf eine Stunde Platzmiete<br/>* Jedes individuelle Training dauert 60 Minuten.<br/>* Die Preisliste gilt nicht für organisierte Sportveranstaltungen und Turniere<br/>* Die Teilnahme an den Kursen setzt die Akzeptanz der Vorschriften voraus.<br/>* Die Gebühren für den Eintritt in die Sporteinrichtung und das Training mit dem Trainer werden am Platzbüro entgegengenommen (Zahlung mit Karte, Bargeld)',
                ],
            ],
            [
                'page_id' => 4,
                'is_active' => true,
                'slug' => 'information_about_price_list_second',
                'content' => [
                    'pl' => 'Jeśli masz jakiekolwiek pytania związane z naszą ofertą, zapraszamy do kontaktu. Przedstawimy Ci szczegóły dotyczące samych powierzchni na kortach oraz przebiegu zajęć, zarówno dla dorosłych, jak i dla dzieci. Skontaktuj się z nami!',
                    'en' => 'If you have any questions related to our offer, feel free to contact us. We will provide you with details regarding the court surfaces and the course of classes, both for adults and children. Contact us!',
                    'de' => 'Wenn Sie Fragen zu unserem Angebot haben, kontaktieren Sie uns bitte. Wir geben Ihnen Details zu den Platzoberflächen und dem Ablauf der Kurse, sowohl für Erwachsene als auch für Kinder. Kontaktiere uns!',
                ],
            ],

            //TRAINER
            [
                'page_id' => 5,
                'is_active' => true,
                'slug' => 'header_text',
                'content' => [
                    'pl' => 'Kadra Trenerska',
                    'en' => 'Coaching Staff',
                    'de' => 'Trainer-Team',
                ],
            ],
            [
                'page_id' => 5,
                'is_active' => true,
                'slug' => 'header_description',
                'content' => [
                    'pl' => 'W naszym klubie prowadzimy indywidualne i grupowe zajęcia pod okiem profesjonalnej kadry trenerów, którzy pomogą Ci opanować podstawy gry lub doskonalić Twoje umiejętności. Bez względu na Twój poziom zaawansowania nasze treningi skonstruowane są tak, aby pomoc Ci osiągnąć swoje cele i poprawić kondycję.',
                    'en' => 'In our club, we conduct individual and group sessions under the supervision of a professional coaching staff who will help you master the basics of the game or improve your skills. Regardless of your skill level, our training sessions are designed to help you achieve your goals and improve your fitness.',
                    'de' => 'In unserem Club führen wir individuelle und Gruppenstunden unter Aufsicht eines professionellen Trainerstabs durch, der Ihnen helfen wird, die Grundlagen des Spiels zu beherrschen oder Ihre Fähigkeiten zu verbessern. Unabhängig von Ihrem Fähigkeitsniveau sind unsere Trainingseinheiten darauf ausgelegt, Ihnen zu helfen, Ihre Ziele zu erreichen und Ihre Fitness zu verbessern.',
                ],
            ],
            [
                'page_id' => 5,
                'is_active' => true,
                'slug' => 'trainers',
                'content' => [
                    [
                        'order' => 1,
                        'is_active' => true,
                        'name' => 'Marcin Olesiński',
                        'profession' => 'Head Coach',
                        'img' => '/gallery/marcin.webp',
                        'phone' => '669832198',
                        'desc' => [
                            'pl' => 'Doświadczenie 25 lat gry w tenisa i ponad 10 lat doświadczenia pracy w klubach w Polsce na każdym szczeblu rozwoju. Trener szkolenia podstawowego i wyczynowego z licencją Polskiego Związku Tenisa z uprawnieniami International Tennis Federation Certyfikaty z warsztatów International Tennis Performance, Cardio Tennis, Professional Tennis Registry.  Uczestnik wielu międzynarodowych konferencji tenisowych w całej Polsce. Wieloletni Head Coach w Akademii Tenisa Oxford i Tenis Park Kołobrzeg.',
                            'en' => 'Experience of 25 years in tennis and over 10 years of work in clubs in Poland at every level of development. Basic and performance training coach with a license from the Polish Tennis Association with International Tennis Federation privileges. Certificates from International Tennis Performance, Cardio Tennis, Professional Tennis Registry workshops. Participant in many international tennis conferences throughout Poland. Longtime Head Coach at the Oxford Tennis Academy and Tennis Park Kołobrzeg.',
                            'de' => '25 Jahre Erfahrung im Tennissport und über 10 Jahre Arbeit in Clubs in Polen auf jeder Entwicklungsstufe. Grundlagen- und Leistungstrainer mit Lizenz des Polnischen Tennisverbands mit Berechtigungen der International Tennis Federation. Zertifikate von Workshops der International Tennis Performance, Cardio Tennis, Professional Tennis Registry. Teilnehmer an vielen internationalen Tennis-Konferenzen in ganz Polen. Langjähriger Cheftrainer an der Oxford Tennis Academy und Tennis Park Kołobrzeg.',
                        ],
                    ],
                    [
                        'order' => 2,
                        'is_active' => true,
                        'name' => 'Krzysztof Mrozowski',
                        'profession' => '',
                        'img' => '/gallery/krzysztof_mski.webp',
                        'phone' => '883011998',
                        'desc' => [
                            'pl' => 'Szkolenie na najwyższym, międzynarodowym poziomie, obejmujące naukę i doskonalenie techniki gry, a także zaznajomienie z elementami taktyki i strategii meczowych oraz świadomej koncentracji. Gwarantuje osiągnięcie widocznych i szybkich postępów w grze – a to stanowi najlepszą nagrodę za wysiłek włożony w treningi. Oferuje treningi indywidualne i grupowe, dla dzieci, młodzieży, dorosłych oraz osób niepełnosprawnych na wózkach inwalidzkich. Prowadzę lekcje tenisa w języku polskim oraz niemieckim. Doświadczenie zawodowe zdobyłem w Polsce, Niemczech, Austrii oraz Szwajcarii w akademiach tenisowych: Niki Pilic Tennis Academy, MTTC Iphitos e.V., European Tennis Academy Swiss oraz Mental Match Play.',
                            'en' => 'Training at the highest international level, including learning and perfecting the technique of the game, as well as familiarization with elements of tactics and match strategy, and conscious concentration. Guarantees visible and rapid progress in the game – the best reward for the effort put into training. Offers individual and group training for children, youth, adults, and wheelchair users. I conduct tennis lessons in Polish and German. Professional experience gained in Poland, Germany, Austria, and Switzerland in tennis academies: Niki Pilic Tennis Academy, MTTC Iphitos e.V., European Tennis Academy Swiss, and Mental Match Play.',
                            'de' => 'Training auf höchstem internationalen Niveau, einschließlich Erlernen und Perfektionieren der Spieltechnik sowie Vertrautheit mit Elementen der Taktik und Spielstrategie sowie bewusster Konzentration. Garantiert sichtbaren und schnellen Fortschritt im Spiel – die beste Belohnung für den Aufwand im Training. Bietet individuelles und Gruppentraining für Kinder, Jugendliche, Erwachsene und Rollstuhlfahrer an. Ich gebe Tennisstunden in Polnisch und Deutsch. Berufserfahrung in Polen, Deutschland, Österreich und der Schweiz in Tennisakademien: Niki Pilic Tennis Academy, MTTC Iphitos e.V., European Tennis Academy Swiss und Mental Match Play.',
                        ],
                    ],
                    [
                        'order' => 3,
                        'is_active' => true,
                        'name' => 'Krzysztof Matlakiewicz',
                        'profession' => '',
                        'img' => '/gallery/krzysztof_mcz.webp',
                        'phone' => '603391551',
                        'desc' => [
                            'pl' => 'Nieprzerwana praca trenerska w Kołobrzeskim Towarzystwie Tenisowym (25 lat) oraz Tenis Park Kołobrzeg (12 lat) z naciskiem na tenis dzieci i młodzieży. Oferuję nowoczesne metody nauczania, które na bieżąco uzupełniane są na wielu międzynarodowych konferencjach i warsztatach tenisowych. Instruktor Professional Tennis Registry. Instruktor Polskiego Związku Tenisowego (1994 rok). Trener II klasy w tenisie (1999 rok) Studia w Akademii Wychowania Fizycznego w Poznaniu. Trener i wychowawca wielu pokoleń kołobrzeskich tenisistów.',
                            'en' => 'Continuous coaching work at Kołobrzeskie Towarzystwo Tenisowe (25 years) and Tennis Park Kołobrzeg (12 years) with a focus on tennis for children and youth. I offer modern teaching methods, constantly supplemented at many international tennis conferences and workshops. Professional Tennis Registry Instructor. Polish Tennis Association Instructor (1994). Tennis Class II coach (1999). Studies at the Academy of Physical Education in Poznań. Coach and mentor to many generations of Kołobrzeg tennis players.',
                            'de' => 'Fortlaufende Trainerarbeit beim Kołobrzeg Tennis Society (25 Jahre) und Tennis Park Kołobrzeg (12 Jahre) mit Schwerpunkt auf Tennis für Kinder und Jugendliche. Ich biete moderne Lehrmethoden an, die auf vielen internationalen Tennis-Konferenzen und Workshops ständig ergänzt werden. Instructor Professional Tennis Registry. Instruktor des Polnischen Tennisverbandes (1994). Tennis Trainer Klasse II (1999). Studium an der Akademie für Leibeserziehung in Posen. Trainer und Mentor vieler Generationen von Kołobrzeg Tennisspielern.',
                        ],
                    ],
                    [
                        'order' => 4,
                        'is_active' => true,
                        'name' => 'Natalia Kozel',
                        'profession' => '',
                        'img' => '/gallery/natalia.webp',
                        'phone' => '503975328',
                        'desc' => [
                            'pl' => 'Wielokrotna medalistka mistrzostw Polski w różnych kategoriach wiekowych oraz stypendystka Amerykańskiej uczelni Drury University. Instruktorka i trenerka PTR ten & under i high performance.',
                            'en' => 'Multiple medalist of the Polish championships in various age categories and a scholarship holder of Drury University in the United States. PTR ten & under and high-performance instructor and coach.',
                            'de' => 'Mehrfacher Medaillengewinner der Polnischen Meisterschaften in verschiedenen Alterskategorien und Stipendiat der amerikanischen Drury University. PTR ten & under und High Performance Instruktor und Trainer.',
                        ],
                    ],
                    [
                        'order' => 5,
                        'is_active' => true,
                        'name' => 'Dominik Kuch',
                        'profession' => '',
                        'img' => '/gallery/dominik.webp',
                        'phone' => '698869157',
                        'desc' => [
                            'pl' => 'Wielokrotny medalista turniejów ogólnopolskich oraz międzynarodowych. Swoj warsztat udoskonalał w miastach takich jak Warszawa, Szczecin czy Trójmiasto, czynny uczestnik konferencji tenisowych, student fizjoterapii na Uniwersytecie Medycznym w Poznaniu, trener tenisa (ITF lvl 2) ze specjalizacją - trener szkolenia wyczynowego',
                            'en' => 'Multiple medalist of national and international tournaments. He honed his skills in cities such as Warsaw, Szczecin, and Tricity, an active participant in tennis conferences, a physiotherapy student at Poznań University Medical University, tennis coach (ITF lvl 2) with a specialization in high-performance training.',
                            'de' => 'Mehrfacher Medaillengewinner von nationalen und internationalen Turnieren. Er hat seine Fähigkeiten in Städten wie Warschau, Stettin und Trójmiasto geschärft, aktiver Teilnehmer an Tennis-Konferenzen, Student für Physiotherapie an der Medizinischen Universität Poznań, Tennislehrer (ITF lvl 2) mit Spezialisierung auf High Performance-Training.',
                        ],
                    ]
                ],
            ],

            //TRAININGS
            [
                'page_id' => 6,
                'is_active' => true,
                'slug' => 'header',
                'content' => [
                    'pl' => 'TRENINGI',
                    'en' => 'TRAININGS',
                    'de' => 'TRAININGS',
                ],
            ],
            [
                'page_id' => 6,
                'is_active' => true,
                'slug' => 'content',
                'content' => [
                    'pl' => 'W naszym klubie prowadzimy indywidualne i grupowe zajęcia pod okiem profesjonalnej kadry trenerów, którzy pomogą Ci opanować podstawy gry lub doskonalić Twoje umiejętności. Bez względu na Twój poziom zaawansowania nasze treningi skonstruowane są tak, aby pomoc Ci osiągnąć swoje cele i poprawić kondycję.',
                    'en' => "In our club, we conduct individual and group sessions under the supervision of a professional coaching staff who will help you master the basics of the game or improve your skills.<br/>Regardless of your skill level, our training sessions are designed to help you achieve your goals and improve your fitness.",
                    'de' => "In unserem Club führen wir individuelle und Gruppenstunden unter Aufsicht eines professionellen Trainerstabs durch, der Ihnen helfen wird, die Grundlagen des Spiels zu beherrschen oder Ihre Fähigkeiten zu verbessern.<br/>Unabhängig von Ihrem Fähigkeitsniveau sind unsere Trainingseinheiten darauf ausgelegt, Ihnen zu helfen, Ihre Ziele zu erreichen und Ihre Fitness zu verbessern."
                ],
            ],
            [
                'page_id' => 6,
                'is_active' => true,
                'slug' => 'img',
                'content' => ['url' => '/gallery/4.webp'],
            ],

            //COURTS
            [
                'page_id' => 7,
                'is_active' => true,
                'slug' => 'header',
                'content' => [
                    'pl' => 'KORTY',
                    'en' => 'COURTS',
                    'de' => 'PLÄTZE',
                ],
            ],
            [
                'page_id' => 7,
                'is_active' => true,
                'slug' => 'content',
                'content' => [
                    'pl' => 'Wszystkich miłośników tenisa zapraszamy do gry na kortach o najwyższej jakości nawierzchni.<br/>W sezonie letnim zapraszamy do gry w tenisa na kortach otwartych, natomiast w okresiejesienno-zimowym zapraszamy na korty kryte w hali tenisowej. <br/>Jakość gry jest dla Nasnajważniejsza, dlatego z wielką starannością dbamy o nawierzchnie kortów. <br/>Na terenieobiektu do dyspozycji dla wszystkich osób jest ścianka treningowa. <br/>W klubie znajduje sięrównież punkt z profesjonalnym naciąganiem rakiet. <br/>Oferujemy usługę serwisowania rakiet,naciąganie rakiet naciągami syntetycznymi i naturalnymi, naprawy elementów rakiet. <br/>Wofercie posiadamy kompleksowo wyposażony punkt sprzedaży ze sprzętem i akcesoriamitenisowymi. <br/><b>W sprzedaży:</b> <br/>◦ <b>Rakiety dla dzieci, młodzieży i dorosłych <br/>◦Piłki tenisowe <br/>◦ Odzież i obuwie <br/>◦ Naciągi syntetyczne i naturalne <br/>◦ Gripy, owijki,gadżety dla miłośników tenisa.</b> <br/><b>Istnieje również możliwość wynajęcia sprzętutenisowego oraz niezbędnych akcesoriów</b>. <br/>Niezbędne informacje uzyskają Państwo wsklepie tenisowym.',
                    'en' => "We invite all tennis enthusiasts to play on courts with the highest quality surface.<br/>In the summer season, we invite you to play tennis on outdoor courts, while in the autumn-winter period, we invite you to indoor courts.<br/>The quality of the game is crucial for us, so we take great care of the court surfaces.<br/>On the premises, there is a training wall available for everyone.<br/>The club also has a point for professional racket stringing.<br/>We offer racket servicing, stringing with synthetic and natural strings, and repairs of racket components.<br/>We have a fully equipped sales point with tennis equipment and accessories in our offer.<br/><b>Available for sale:</b> <br/>◦ <b>Rackets for children, youth, and adults <br/>◦ Tennis balls <br/>◦ Clothing and footwear <br/>◦ Synthetic and natural strings <br/>◦ Grips, overgrips, tennis gadgets.</b> <br/><b>It is also possible to rent tennis equipment and necessary accessories</b>.<br/>You can get all the necessary information at the tennis shop.",
                    'de' => "Wir laden alle Tennisbegeisterten ein, auf Plätzen mit höchster Qualität zu spielen.<br/>In der Sommersaison laden wir Sie zum Tennisspielen auf Freiplätzen ein, während wir Sie in der Herbst-Winter-Periode zu Hallenplätzen einladen.<br/>Die Qualität des Spiels ist für uns entscheidend, daher kümmern wir uns sorgfältig um die Platzoberflächen.<br/>Auf dem Gelände steht eine Trainingswand für alle zur Verfügung.<br/>Der Club verfügt auch über einen Punkt für professionelles Bespannen von Schlägern.<br/>Wir bieten Schlägerwartung, Bespannen mit synthetischen und natürlichen Saiten sowie Reparaturen von Schlägerkomponenten an.<br/>Wir haben einen voll ausgestatteten Verkaufspunkt mit Tennisausrüstung und Zubehör in unserem Angebot.<br/><b>Zu verkaufen:</b> <br/>◦ <b>Schläger für Kinder, Jugendliche und Erwachsene <br/>◦ Tennisbälle <br/>◦ Kleidung und Schuhe <br/>◦ Synthetische und natürliche Saiten <br/>◦ Griffe, Overgrips, Tennis-Gadgets.</b> <br/><b>Es besteht auch die Möglichkeit, Tennisausrüstung und erforderliches Zubehör zu mieten</b>.<br/>Alle notwendigen Informationen erhalten Sie im Tennisschuh.",
                ],
            ],
            [
                'page_id' => 7,
                'is_active' => true,
                'slug' => 'img',
                'content' => ['url' => '/gallery/11.jpg'],
            ],

            //TOURNAMENTS
            [
                'page_id' => 8,
                'is_active' => true,
                'slug' => 'header',
                'content' => [
                    'pl' => 'TURNIEJE',
                    'en' => 'TOURNAMENTS',
                    'de' => 'TURNIERE',
                ],
            ],
            [
                'page_id' => 8,
                'is_active' => true,
                'slug' => 'content',
                'content' => [
                    'pl' => 'Zapraszamy do uczestnictwa w ekscytujących turniejach zorganizowanych przez Baltic Tennis Club Kołobrzeg! Bez względu na poziom umiejętności, nasze wydarzenia tenisowe zapewniają atmosferę rywalizacji i radości z gry. Doświadczeni trenerzy oraz korty o wysokiej jakości nawierzchni tworzą idealne warunki do udziału w turniejach. Oprócz tradycyjnych rozgrywek, organizujemy także turnieje tematyczne, łączące zabawę i pasję do tenisa. Dołącz do nas, aby przeżyć intensywne chwile rywalizacji i czerpać radość z tenisa podczas fascynujących turniejów!',
                    'en' => "We invite you to participate in exciting tournaments organized by Baltic Tennis Club Kołobrzeg! Regardless of your skill level, our tennis events provide an atmosphere of competition and joy in the game. Experienced coaches and high-quality court surfaces create ideal conditions for participating in tournaments. In addition to traditional competitions, we also organize thematic tournaments that combine fun and a passion for tennis. Join us to experience intense moments of competition and enjoy tennis during exciting tournaments!",
                    'de' => "Wir laden Sie ein, an aufregenden Turnieren teilzunehmen, die vom Baltic Tennis Club Kołobrzeg organisiert werden! Unabhängig von Ihrem Fähigkeitsniveau bieten unsere Tennisevents eine Atmosphäre des Wettbewerbs und der Freude am Spiel. Erfahrene Trainer und hochwertige Spielflächen schaffen ideale Bedingungen für die Teilnahme an Turnieren. Neben traditionellen Wettkämpfen organisieren wir auch thematische Turniere, die Spaß und Leidenschaft für Tennis verbinden. Schließen Sie sich uns an, um intensive Wettkampfmomente zu erleben und Tennis während aufregender Turniere zu genießen!"
                ],
            ],
            [
                'page_id' => 8,
                'is_active' => true,
                'slug' => 'img',
                'content' => ['url' => '/gallery/5.webp'],
            ],

            //FACILITY
            [
                'page_id' => 9,
                'is_active' => true,
                'slug' => 'header',
                'content' => [
                    'pl' => 'OBIEKT',
                    'en' => 'FACILITY',
                    'de' => 'ANLAGE',
                ],
            ],
            [
                'page_id' => 9,
                'is_active' => true,
                'slug' => 'content',
                'content' => [
                    'pl' => 'Nasz klub jest położony w urokliwym miejscu, w pobliżu Morza Bałtyckiego oraz Nadmorskiego parku leśnego.<br/> Klub tenisowy Baltic Tennis Club to wspaniałe miejsce dla relaksu, spacerów a przede wszystkim gry w tenisa.<br/> Jest ozdobą pięknego miasta Kolobrzeg.',
                    'en' => "Our club is located in a charming place, near the Baltic Sea and the Coastal Forest Park.<br/>The Baltic Tennis Club is a wonderful place for relaxation, walks, and above all, tennis.<br/>It is an ornament of the beautiful city of Kolobrzeg.",
                    'de' => "Unser Club befindet sich an einem charmanten Ort, in der Nähe der Ostsee und des Küstenwaldparks.<br/>Der Baltic Tennis Club ist ein wunderbarer Ort zum Entspannen, Spazieren und vor allem Tennis spielen.<br/>Es ist eine Zierde der schönen Stadt Kolobrzeg."
                ],
            ],
            [
                'page_id' => 9,
                'is_active' => true,
                'slug' => 'img',
                'content' => ['url' => '/gallery/13.jpg'],
            ],

            //TENNIS FOR EVERYONE
            [
                'page_id' => 10,
                'is_active' => true,
                'slug' => 'header',
                'content' => [
                    'pl' => 'TENIS W KOŁOBRZEGU DLA KAŻDEGO',
                    'en' => 'TENNIS IN KOŁOBRZEG FOR EVERYONE',
                    'de' => 'TENNIS IN KOŁOBRZEG FÜR JEDEN',
                ],
            ],
            [
                'page_id' => 10,
                'is_active' => true,
                'slug' => 'content',
                'content' => [
                    'pl' => 'Lekcje tenisa w klubie Baltic Tenis Club przeznaczone są dla każdego, niezależnie od wieku i umiejętności. <br/>Zapraszamy dorosłych trenujących amatorsko lub na poziomie zaawansowanym <br/>Nasz wykwalifikowany personel trenerski dostosuje zajęcia, tak abyś mógł rozwijać swoje umiejętności . <br/> Oferujemy zajęcia dla Tenisistów na każdym poziomie zaawansowania ora zawsze staramy się odpowiednio dobrać trenera do podopiecznego, po wcześniejszej rozmowie z klientem o jego oczekiwaniach, możliwościach i celach treningowych.<br/><b>Prowadzim treningi dla:</b><br/>• <b>Początkujących</b>. Celem treningów jest wprowadzenie do tenisa oraz nauka podstawowych uderzeń oraz zachowań na korcie.<br/>• <b>Średniozaawansowanych</b>. Cele treningów jest doskonalenie umiejętności tenisowych oraz nauka gry na punkty i współzawodnictwa.<br/>• <b>Zaawansowanych</b>. Celem treningów jest doskonalenie umiejętnośc technicznych oraz gry sparingowe.',
                    'en' => "Tennis lessons at Baltic Tennis Club are designed for everyone, regardless of age and skill level.<br/>We welcome adults training on an amateur or advanced level.<br/>Our qualified coaching staff will tailor sessions so you can develop your skills.<br/>We offer lessons for tennis players at every level and always strive to match the coach to the trainee after a prior conversation with the client about their expectations, abilities, and training goals.<br/><b>We conduct training for:</b><br/>• <b>Beginners</b>. The goal of training is to introduce to tennis and teach basic strokes and court behavior.<br/>• <b>Intermediate</b>. The goal of training is to refine tennis skills and learn point play and competition.<br/>• <b>Advanced</b>. The goal of training is to refine technical skills and engage in match play.",
                    'de' => "Tennisstunden im Baltic Tennis Club sind für jeden geeignet, unabhängig von Alter und Können.<br/>Wir begrüßen Erwachsene, die auf Amateur- oder Fortgeschrittenenniveau trainieren.<br/>Unser qualifiziertes Trainerteam wird die Stunden so gestalten, dass Sie Ihre Fähigkeiten entwickeln können.<br/>Wir bieten Unterricht für Tennisspieler auf jedem Niveau an und bemühen uns immer, den Trainer nach einem vorherigen Gespräch mit dem Kunden über deren Erwartungen, Fähigkeiten und Trainingsziele zuzuordnen.<br/><b>Wir führen Training durch für:</b><br/>• <b>Anfänger</b>. Das Ziel des Trainings ist es, an Tennis heranzuführen und grundlegende Schläge und Verhaltensweisen auf dem Platz zu lehren.<br/>• <b>Fortgeschrittene Anfänger</b>. Das Ziel des Trainings ist es, Tenniskenntnisse zu verfeinern und das Spielen auf Punkte und den Wettbewerb zu erlernen.<br/>• <b>Fortgeschrittene</b>. Das Ziel des Trainings ist es, technische Fähigkeiten zu verfeinern und in Matchspielen zu engagieren."
                ],
            ],
            [
                'page_id' => 10,
                'is_active' => true,
                'slug' => 'img',
                'content' => ['url' => '/gallery/6.webp'],
            ],

            //HOLIDAYS FOR THE YOUNGEST
            [
                'page_id' => 11,
                'is_active' => true,
                'slug' => 'header',
                'content' => [
                    'pl' => 'WAKACJE Z TENISEM DLA NAJMŁODSZYCH',
                    'en' => '',
                    'de' => '',
                ],
            ],
            [
                'page_id' => 11,
                'is_active' => true,
                'slug' => 'content',
                'content' => [
                    'pl' => 'Balitc Tennis Club zaprasza wszystkie dzieci i młodzież w wieku 6-13 lat na półkolonie tenisowe w Kołobrzegu.<br/> Gwarantujemy wspaniała letnią przygodę pełna aktywności fizycznej, nauki gry w tenisa i zabawy.<br/> Półkolonie są doskonałą formą aktywnego wypoczynku, świetnym sposobem spędzenia wakacji w gronie rówieśników.<br/> Zapewniamy bezpieczne i profesjonalne warunki.<br/> Oprócz gry w tenisa przygotowaliśmy dla dzieci wiele dodatkowych atrakcji, które spowodują, z nikt nie będzie się nudził.<br/> A chwile z Nami będą niezapomniane.',
                    'en' => "Baltic Tennis Club invites all children and youth aged 6-13 to tennis day camps in Kołobrzeg.<br/>We guarantee a wonderful summer adventure full of physical activity, learning tennis, and fun.<br/>Day camps are an excellent form of active recreation, a great way to spend holidays with peers.<br/>We provide safe and professional conditions.<br/>In addition to playing tennis, we have prepared many additional attractions for children, ensuring that no one will be bored.<br/>And moments with us will be unforgettable.",
                    'de' => "Der Baltic Tennis Club lädt alle Kinder und Jugendliche im Alter von 6-13 Jahren zu Tennis-Feriencamps in Kołobrzeg ein.<br/>Wir garantieren ein wunderbares Sommerabenteuer voller körperlicher Aktivität, dem Erlernen von Tennis und Spaß.<br/>Feriencamps sind eine ausgezeichnete Form der aktiven Erholung, eine großartige Möglichkeit, die Ferien mit Gleichaltrigen zu verbringen.<br/>Wir bieten sichere und professionelle Bedingungen.<br/>Neben dem Tennisspielen haben wir viele zusätzliche Attraktionen für Kinder vorbereitet, um sicherzustellen, dass niemand sich langweilen wird.<br/>Und Momente mit uns werden unvergesslich sein."
                ],
            ],
            [
                'page_id' => 11,
                'is_active' => true,
                'slug' => 'img',
                'content' => ['url' => '/gallery/2.webp'],
            ],

            //PARTNERS
            [
                'page_id' => 12,
                'is_active' => true,
                'slug' => 'header',
                'content' => [
                    'pl' => 'PARTNERZY',
                    'en' => 'PARTNERS',
                    'de' => 'PARTNER',
                ],
            ],
            [
                'page_id' => 12,
                'is_active' => true,
                'slug' => 'content',
                'content' => [
                    'pl' => 'Zapraszamy do kontaktu wszyskie firmy chcące nawiązać współprace.',
                    'en' => 'We invite all companies interested in cooperation to contact us.',
                    'de' => 'Wir laden alle Unternehmen, die an einer Zusammenarbeit interessiert sind, zur Kontaktaufnahme ein.',
                ],
            ],
            [
                'page_id' => 12,
                'is_active' => true,
                'slug' => 'img',
                'content' => ['url' => '/gallery/6.webp'],
            ],

            //RULES
            [
                'page_id' => 13,
                'is_active' => true,
                'slug' => 'main_text',
                'content' => [
                    'pl' => 'Serdecznie zapraszamy do naszego klubu Baltic Tennis Club w Kołobrzegu.,<br/>W dbałości o dobre relacje i współpracę, w kilku punktach przedstawiamy podstawowe zasady rezerwacji.<br/>Prosimy o zapoznanie się z regulaminem klubu.<br/>Jeśli macie jakiekolwiek pytania zapraszamy do kontaktu z biurem kortów - odpowiemy na Państwa wszystkie pytania.<br/>Dokonanie rezerwacji uznajemy za dowód zapoznania się z regulaminem oraz zgodę na ich respektowanie.<br/>REGULAMIN KLUBU TENISOWEGO BALTIC TENNIS CLUB KOŁOBRZEG:',
                    'en' => 'Welcome to our Baltic Tennis Club in Kołobrzeg.,<br/>In the spirit of fostering good relationships and cooperation, we present some basic reservation rules in a few points.,<br/>Please familiarize yourself with the club regulations.,<br/>If you have any questions, feel free to contact the court office - we will answer all your inquiries.,<br/>Making a reservation is considered proof of acquaintance with the regulations and agreement to adhere to them.,<br/>RULES OF THE BALTIC TENNIS CLUB KOŁOBRZEG:',
                    'de' => 'Herzlich willkommen in unserem Baltic Tennis Club in Kołobrzeg.,<br/>Im Interesse guter Beziehungen und Zusammenarbeit möchten wir Ihnen einige grundlegende Buchungsregeln vorstellen.,<br/>Bitte informieren Sie sich über die Clubregeln.,<br/>Bei Fragen stehen wir Ihnen gerne im Büro für Tennisplätze zur Verfügung - wir beantworten alle Ihre Fragen.,<br/>Die Buchung gilt als Nachweis für das Kennenlernen der Regeln und die Zustimmung zu ihrer Einhaltung.,<br/>VEREINSORDNUNG DES TENNISCLUBS BALTIC TENNIS CLUB KOŁOBRZEG:',
                ],
            ],
            [
                'page_id' => 13,
                'is_active' => true,
                'slug' => 'rules',
                'content' => [
                    [
                        'header' => [
                            'pl' => '1. Rezerwacji dokonujemy:',
                            'en' => '1. Reservations can be made:',
                            'de' => '1. Buchungen werden vorgenommen:',
                        ],
                        'points' => [
                            [
                                'pl' => '- online przez stronę klubową baltictennisclub.com oraz kluby.org',
                                'en' => '- online through the club website baltictennisclub.com and kluby.org',
                                'de' => '- online über die Clubwebsite baltictennisclub.com sowie kluby.org',
                            ],
                            [
                                'pl' => '- telefonicznie (nie sms)',
                                'en' => '- by phone (not via SMS)',
                                'de' => '- telefonisch (nicht per SMS)',
                            ],
                            [
                                'pl' => '- osobiście w biurze kortów',
                                'en' => '- in person at the court office',
                                'de' => '- persönlich im Büro für Tennisplätze',
                            ],
                        ]
                    ],
                    [
                        'header' => [
                            'pl' => '2. Rezerwacja obejmuje przeznaczenie ostatnich 5 min na czynności porządkujące kort po jej zakończeniu. Chęć przedłużenia trwającej rezerwacji prosimy zgłosić do biura.',
                            'en' => '2. A reservation includes allocating the last 5 minutes for tidying up the court after its conclusion. If you wish to extend the ongoing reservation, please inform the office.',
                            'de' => '2. Eine Buchung beinhaltet die Nutzung der letzten 5 Minuten für aufräumende Aktivitäten auf dem Platz nach ihrem Ende. Bitte melden Sie im Büro, wenn Sie die laufende Buchung verlängern möchten.',
                        ],
                        'points' => []
                    ],
                    [
                        'header' => [
                            'pl' => '3. Rezerwację można odwołać bezpłatnie do godziny 20:00 dnia poprzedniego. Brak odwołania rezerwacji w terminie będzie skutkował naliczeniem 50% opłaty za kort.',
                            'en' => '3. Reservations can be canceled free of charge until 8:00 PM the day before. Failure to cancel the reservation within the specified period will result in the full fee being charged.',
                            'de' => '3. Buchungen können bis 20:00 Uhr des Vortages kostenlos storniert werden. Das Nichtstornieren der Buchung innerhalb der Frist führt zur Berechnung der vollen Gebühr.',
                        ],
                        'points' => []
                    ],
                    [
                        'header' => [
                            'pl' => '4. Rezerwacja powinna zostać opłacona przed lub zaraz po zakończeniu gry.',
                            'en' => '4. Payment for the reservation should be made before or immediately after the end of the game.',
                            'de' => '4. Die Buchung sollte vor oder unmittelbar nach dem Ende des Spiels bezahlt werden.',
                        ],
                        'points' => [
                            [
                                'pl' => '- w przypadku posiadania zaległości na rzecz klubu wynikającej z poprzedniego odwołania rezerwacji, będzie ona naliczona.',
                                'en' => '- In case of outstanding debts to the club resulting from a previous reservation cancellation, it will be charged.',
                                'de' => '- Bei bestehenden Schulden gegenüber dem Club aufgrund einer früheren Buchungsstornierung werden diese berechnet.',
                            ],
                            [
                                'pl' => '- w przypadku posiadania zaległości klient posiada 7 dni na dokonanie opłaty',
                                'en' => '- In the case of existing debts, the client has 7 days to make the payment.',
                                'de' => '- Bei bestehenden Schulden hat der Kunde 7 Tage Zeit, die Zahlung zu leisten.',
                            ],
                        ]
                    ],
                    [
                        'header' => [
                            'pl' => '5. Rezerwacje na korty otwarte, mogą zostać odwołane lub przerwane z uwagi na niekorzystne warunku atmosferyczne.',
                            'en' => '5. Reservations for open courts may be canceled or interrupted due to adverse weather conditions.',
                            'de' => '5. Buchungen für offene Plätze können aufgrund ungünstiger Wetterbedingungen storniert oder unterbrochen werden.',
                        ],
                        'points' => [
                            [
                                'pl' => '- prosimy o kontakt telefoniczny z obsługą w celu ustalenia aktualnej sytuacji na kortach w kwestii panujących warunków oraz technicznej przydatności kortów do ich użytkowania.',
                                'en' => '- Please contact the office by phone to determine the current situation on the courts regarding prevailing conditions and the technical suitability of the courts for use.',
                                'de' => '- Bitte kontaktieren Sie das Personal telefonisch, um die aktuelle Situation auf den Plätzen hinsichtlich der Wetterbedingungen und der technischen Eignung für die Nutzung zu klären.',
                            ],
                            [
                                'pl' => '- jeśli korty będą nieadekwatne do użytku obsługa kortów poinformuje o odwołaniu, przełożeniu rezerwacji na inny termin lub zaproponuje grę na kortach krytych',
                                'en' => '- If the courts are inadequate for use, the court staff will inform about the cancellation, rescheduling of the reservation for another date, or propose playing on covered courts.',
                                'de' => '- Wenn die Plätze nicht für die Nutzung geeignet sind, informiert das Platzpersonal über die Stornierung, die Verschiebung der Buchung auf einen anderen Termin oder schlägt ein Spiel auf überdachten Plätzen vor.',
                            ],
                            [
                                'pl' => '- jeśli gra zostanie przerwana należność zostanie naliczona proporcjonalnie do wykorzystanego czasu',
                                'en' => '- If the game is interrupted, the fee will be charged proportionally to the time used.',
                                'de' => '- Wenn das Spiel unterbrochen wird, wird die Gebühr proportional zur genutzten Zeit berechnet.',
                            ],
                        ]
                    ],
                    [
                        'header' => [
                            'pl' => '6. Zasady korzystania z kortów klubu tenisowego:',
                            'en' => "6. Rules for using the club's tennis courts:",
                            'de' => '6. Regeln für die Nutzung der Tennisplätze des Clubs:',
                        ],
                        'points' => [
                            [
                                'pl' => '- wszystkich obowiązuje strój sportowy i odpowiednie obuwie tenisowe',
                                'en' => '- All players must wear sports attire and appropriate tennis shoes.',
                                'de' => '- Alle müssen Sportbekleidung und geeignetes Tennisschuhwerk tragen.',
                            ],
                            [
                                'pl' => '- na korcie obowiązuje zakaz spożywania alkoholu, środków odurzających, palenia papierosów',
                                'en' => '- Drinking alcohol, taking drugs, and smoking cigarettes are prohibited on the court.',
                                'de' => '- Das Trinken von Alkohol, Drogen und das Rauchen von Zigaretten sind auf dem Platz verboten.',
                            ],
                            [
                                'pl' => '- klub nie bierze odpowiedzialności za urazy i kontuzje powstałe na korcie',
                                'en' => '- The club is not responsible for injuries and injuries that occur on the court.',
                                'de' => '- Der Club übernimmt keine Verantwortung für Verletzungen, die auf dem Platz entstehen.',
                            ],
                            [
                                'pl' => '- klub nie odpowiada za rzeczy zgubione jednak wszystkie odnalezione trafiają do recepcji',
                                'en' => '- The club is not responsible for lost items, but all found items are handed over to the reception.',
                                'de' => '- Der Club haftet nicht für verlorene Gegenstände, jedoch werden alle gefundenen Gegenstände an der Rezeption abgegeben.',
                            ],
                            [
                                'pl' => '- zakaz wprowadzania zwierząt na teren kortu',
                                'en' => '- Bringing animals onto the court is prohibited.',
                                'de' => '- Das Mitbringen von Tieren auf den Platz ist untersagt.',
                            ],
                            [
                                'pl' => '- wszystkie zniszczenia kortu lub sprzętu dokonane podczas pobytu na kortach będą doliczane do rachunku',
                                'en' => '- All damage to the court or equipment incurred during your stay on the courts will be added to the bill.',
                                'de' => '- Alle Schäden am Platz oder an Geräten, die während des Aufenthalts auf den Plätzen entstehen, werden dem Konto belastet.',
                            ],
                        ]
                    ],
                    [
                        'header' => [
                            'pl' => '7. Obsługa ma prawo wyprosić osobę, która nie przestrzega powyższych standardów klubu Baltic Tennis Club',
                            'en' => '7. Staff has the right to ask individuals who do not adhere to the above club standards to leave.',
                            'de' => '7. Das Personal hat das Recht, Personen, die diese Clubstandards nicht einhalten, zu bitten zu gehen.',
                        ],
                        'points' => []
                    ],
                    [
                        'header' => [
                            'pl' => '8. Rezerwacja kortów jest równoznaczna z akceptacją regulaminu.',
                            'en' => '8. Booking courts is synonymous with accepting the regulations.',
                            'de' => '8. Die Buchung von Plätzen ist gleichbedeutend mit der Akzeptanz der Regeln.',
                        ],
                        'points' => []
                    ]
                ],
            ],
            [
                'page_id' => 13,
                'is_active' => true,
                'slug' => 'footer_text',
                'content' => [
                    'pl' => 'Zarząd Baltic Tennis Club w Kołobrzegu',
                    'en' => 'Management of the Baltic Tennis Club in Kołobrzeg',
                    'de' => 'Vorstand des Baltic Tennis Club in Kołobrzeg',
                ],
            ],

            //PRIVACY POLICY
            [
                'page_id' => 14,
                'is_active' => true,
                'slug' => 'privacy_policy',
                'content' => [
                    [
                        'header' => [
                            'pl' => '1. Informacje ogólne',
                            'en' => '1. General Information',
                            'de' => '1. Allgemeine Informationen',
                        ],
                        'content' => [
                            'pl' => 'Niniejsza polityka dotyczy Serwisu www, funkcjonującego pod adresem url: baltictennisclub.com Operatorem serwisu oraz Administratorem danych osobowych jest: Baltic Tennis Club ul. Sikorskiego 1, 78-100 Kołobrzeg, Polska Adres kontaktowy poczty elektronicznej operatora: biuro@baltictennisclub.com Operator jest Administratorem Twoich danych osobowych w odniesieniu do danych podanych dobrowolnie w Serwisie. Serwis wykorzystuje dane osobowe w następujących celach: Prowadzenie newslettera Obsługa zapytań przez formularz Serwis realizuje funkcje pozyskiwania informacji o użytkownikach i ich zachowaniu w następujący sposób: Poprzez dobrowolnie wprowadzone w formularzach dane, które zostają wprowadzone do systemów Operatora. Poprzez zapisywanie w urządzeniach końcowych plików cookie (tzw. „ciasteczka”). ',
                            'en' => "This policy concerns the website www, operating at the URL baltictennisclub.com. The operator of the service and the controller of personal data is Baltic Tennis Club, ul. Sikorskiego 1, 78-100 Kołobrzeg, Poland. The operator's contact email address is: biuro@baltictennisclub.com. The operator is the controller of your personal data regarding voluntarily provided data in the service. The service uses personal data for the following purposes: Conducting newsletters, Handling inquiries through forms. The service collects information about users and their behavior in the following ways: Through voluntarily entered data in forms, which are entered into the operator's systems. By storing cookie files (so-called 'cookies'') on end devices.",
                            'de' => 'Diese Richtlinie betrifft die Website www, die unter der URL baltictennisclub.com betrieben wird. Der Betreiber der Website und der Verantwortliche für personenbezogene Daten ist: Baltic Tennis Club, ul. Sikorskiego 1, 78-100 Kołobrzeg, Polen. Die Kontakt-E-Mail-Adresse des Betreibers lautet: biuro@baltictennisclub.com. Der Betreiber ist der Verantwortliche für Ihre personenbezogenen Daten in Bezug auf die freiwillig im Service bereitgestellten Daten. Der Service verwendet personenbezogene Daten zu folgenden Zwecken: Durchführung des Newsletters, Bearbeitung von Anfragen über das Formular. Der Service sammelt Informationen über Benutzer und deren Verhalten auf folgende Weise: Durch freiwillig in die Formulare eingegebene Daten, die in den Systemen des Betreibers gespeichert werden. Durch Speichern von Cookie-Dateien (sogenannte "Cookies") auf Endgeräten.',
                        ]
                    ],
                    [
                        'header' => [
                            'pl' => '2. Wybrane metody ochrony danych stosowane przez Operatora',
                            'en' => '2. Selected Data Protection Methods Used by the Operator',
                            'de' => '2. Ausgewählte Datenschutzmethoden des Betreibers',
                        ],
                        'content' => [
                            'pl' => 'Miejsca logowania i wprowadzania danych osobowych są chronione w warstwie transmisji (certyfikat SSL). Dzięki temu dane osobowe i dane logowania, wprowadzone na stronie, zostają zaszyfrowane w komputerze użytkownika i mogą być odczytane jedynie na docelowym serwerze. ',
                            'en' => "Login and personal data entry areas are protected in the transmission layer (SSL certificate). This encrypts personal data and login information entered on the site on the user's computer and can only be read on the target server.",
                            'de' => 'Die Anmelde- und Dateneingabebereiche sind durch eine Transportschicht geschützt (SSL-Zertifikat). Dadurch werden personenbezogene Daten und Anmeldeinformationen, die auf der Website eingegeben werden, auf dem Computer des Benutzers verschlüsselt und können nur auf dem Zielserver gelesen werden.',
                        ]
                    ],
                    [
                        'header' => [
                            'pl' => '3. Hosting',
                            'en' => '3. Hosting',
                            'de' => '3. Hosting',
                        ],
                        'content' => [
                            'pl' => 'Serwis jest hostowany (technicznie utrzymywany) na serwerach operatora: https://hosting.domena.pl/ ',
                            'en' => "The service is hosted on the operator's servers: https://hosting.domena.pl/",
                            'de' => 'Der Service wird auf den Servern des Betreibers gehostet: https://hosting.domena.pl/',
                        ]
                    ],
                    [
                        'header' => [
                            'pl' => '4. Twoje prawa i dodatkowe informacje o sposobie wykorzystania danych',
                            'en' => '4. Your Rights and Additional Information on Data Usage',
                            'de' => '4. Ihre Rechte und zusätzliche Informationen zur Datenverwendung',
                        ],
                        'content' => [
                            'pl' => 'W niektórych sytuacjach Administrator ma prawo przekazywać Twoje dane osobowe innym odbiorcom, jeśli będzie to niezbędne do wykonania zawartej z Tobą umowy lub do zrealizowania obowiązków ciążących na Administratorze. Dotyczy to takich grup odbiorców: upoważnieni pracownicy i współpracownicy, którzy korzystają z danych w celu realizacji celu działania strony firmy, świadczące usługi marketingu na rzecz Administratora Twoje dane osobowe przetwarzane przez Administratora nie dłużej, niż jest to konieczne do wykonania związanych z nimi czynności określonych osobnymi przepisami (np. o prowadzeniu rachunkowości). W odniesieniu do danych marketingowych dane nie będą przetwarzane dłużej niż przez 3 lata. Przysługuje Ci prawo żądania od Administratora: dostępu do danych osobowych Ciebie dotyczących, ich sprostowania, usunięcia, ograniczenia przetwarzania, oraz przenoszenia danych. Przysługuje Ci prawo do złożenia sprzeciwu w zakresie przetwarzania wskazanego w pkt 3.3 c) wobec przetwarzania danych osobowych w celu wykonania prawnie uzasadnionych interesów realizowanych przez Administratora, w tym profilowania, przy czym prawo sprzeciwu nie będzie mogło być wykonane w przypadku istnienia ważnych prawnie uzasadnionych podstaw do przetwarzania, nadrzędnych wobec Ciebie interesów, praw i wolności, w szczególności ustalenia, dochodzenia lub obrony roszczeń. Na działania Administratora przysługuje skarga do Prezesa Urzędu Ochrony Danych Osobowych, ul. Stawki 2, 00-193 Warszawa. Podanie danych osobowych jest dobrowolne, lecz niezbędne do obsługi Serwisu. W stosunku do Ciebie mogą być podejmowane czynności polegające na zautomatyzowanym podejmowaniu decyzji, w tym profilowaniu w celu świadczenia usług w ramach zawartej umowy oraz w celu prowadzenia przez Administratora marketingu bezpośredniego. Dane osobowe nie są przekazywane od krajów trzecich w rozumieniu przepisów o ochronie danych osobowych. Oznacza to, że nie przesyłamy ich poza teren Unii Europejskiej. ',
                            'en' => "In some situations, the administrator has the right to transfer your personal data to other recipients if necessary to perform a contract with you or to fulfill obligations imposed on the administrator. This includes authorized employees and collaborators who use the data to achieve the goals of the company's website and provide marketing services on behalf of the operator. Your personal data processed by the administrator will not be processed for longer than necessary to perform activities related to them specified in separate regulations (e.g., accounting). Regarding marketing data, the data will not be processed for more than 3 years. You have the right to request from the administrator: access to your personal data, their correction, deletion, processing limitation, and data transfer. You have the right to object to the processing specified in point 3.3 c) in relation to the processing of personal data for the purpose of the legitimate interests pursued by the administrator, including profiling, provided that the right to object cannot be exercised if there are legitimate grounds for processing, overriding your interests, rights, and freedoms, in particular establishing, investigating, or defending legal claims. The administrator's actions are subject to a complaint to the President of the Office for Personal Data Protection, ul. Stawki 2, 00-193 Warsaw. Providing personal data is voluntary but necessary to use the service. Automated decision-making, including profiling, may be taken in relation to you to provide services under the concluded contract and for the purpose of direct marketing by the administrator. Personal data is not transferred to third countries within the meaning of personal data protection regulations. This means that we do not transfer them outside the European Union.",
                            'de' => 'In einigen Situationen hat der Administrator das Recht, Ihre personenbezogenen Daten an andere Empfänger weiterzugeben, wenn dies zur Erfüllung eines mit Ihnen geschlossenen Vertrags oder zur Erfüllung von Verpflichtungen erforderlich ist. Dies betrifft autorisierte Mitarbeiter und Mitarbeiter, die die Daten zur Erfüllung der Unternehmenszwecke verwenden, sowie Marketingdienstleister im Auftrag des Betreibers. Ihre personenbezogenen Daten werden vom Administrator nicht länger verarbeitet, als dies für die in separaten Vorschriften festgelegten Tätigkeiten erforderlich ist (z. B. Buchführung). Marketingdaten werden nicht länger als 3 Jahre verarbeitet. Ihnen steht das Recht zu, vom Administrator den Zugang zu Ihren personenbezogenen Daten, deren Berichtigung, Löschung, Einschränkung der Verarbeitung und Übertragung zu verlangen. Sie haben das Recht, der Verarbeitung Ihrer personenbezogenen Daten zu widersprechen, es sei denn, es gibt zwingende rechtliche Gründe für die Verarbeitung, die Ihre Interessen, Rechte und Freiheiten überwiegen.',
                        ]
                    ],
                    [
                        'header' => [
                            'pl' => '5. Informacje w formularzach',
                            'en' => '5. Information in Forms',
                            'de' => '5. Informationen in Formularen',
                        ],
                        'content' => [
                            'pl' => 'Serwis zbiera informacje podane dobrowolnie przez użytkownika, w tym dane osobowe, o ile zostaną one podane. Serwis może zapisać informacje o parametrach połączenia (oznaczenie czasu, adres IP). Serwis, w niektórych wypadkach, może zapisać informację ułatwiającą powiązanie danych w formularzu z adresem e-mail użytkownika wypełniającego formularz. W takim wypadku adres e-mail użytkownika pojawia się wewnątrz adresu url strony zawierającej formularz. Dane podane w formularzu są przetwarzane w celu wynikającym z funkcji konkretnego formularza, np. w celu dokonania procesu obsługi zgłoszenia serwisowego lub kontaktu handlowego, rejestracji usług itp. Każdorazowo kontekst i opis formularza w czytelny sposób informuje, do czego on służy. ',
                            'en' => "The service collects information voluntarily provided by the user, including personal data, if provided. The service may save information about connection parameters (time stamp, IP address). In some cases, the service may save information facilitating the association of data in the form with the user's email address filling out the form.",
                            'de' => 'Der Service sammelt freiwillig vom Benutzer bereitgestellte Informationen, einschließlich personenbezogener Daten, sofern angegeben. Der Service kann Informationen über Verbindungseinstellungen (Zeitstempel, IP-Adresse) speichern. In einigen Fällen kann der Service Informationen speichern, die das Zuordnen von Daten im Formular zur E-Mail-Adresse des Benutzers erleichtern.',
                        ]
                    ],
                    [
                        'header' => [
                            'pl' => '6. Logi Administratora',
                            'en' => '6. Administrator Logs',
                            'de' => '6. Administrator-Logs',
                        ],
                        'content' => [
                            'pl' => 'Informacje zachowaniu użytkowników w serwisie mogą podlegać logowaniu. Dane te są wykorzystywane w celu administrowania serwisem. ',
                            'en' => 'Information about user behavior on the site may be subject to logging. This data is used for service administration.',
                            'de' => 'Informationen zum Verhalten von Benutzern auf der Website können protokolliert werden. Diese Daten werden zur Verwaltung des Dienstes verwendet.',
                        ]
                    ],
                    [
                        'header' => [
                            'pl' => '7. Istotne techniki marketingowe',
                            'en' => '7. Significant Marketing Techniques',
                            'de' => '7. Wesentliche Marketingtechniken',
                        ],
                        'content' => [
                            'pl' => 'Operator stosuje analizę statystyczną ruchu na stronie, poprzez Google Analytics (Google Inc. z siedzibą w USA). Operator nie przekazuje do operatora tej usługi danych osobowych, a jedynie zanonimizowane informacje. Usługa bazuje na wykorzystaniu ciasteczek w urządzeniu końcowym użytkownika. W zakresie informacji o preferencjach użytkownika gromadzonych przez sieć reklamową Google użytkownik może przeglądać i edytować informacje wynikające z plików cookies przy pomocy narzędzia: https://www.google.com/ads/preferences/ Operator stosuje techniki remarketingowe, pozwalające na dopasowanie przekazów reklamowych do zachowania użytkownika na stronie, co może dawać złudzenie, że dane osobowe użytkownika są wykorzystywane do jego śledzenia, jednak w praktyce nie dochodzi do przekazania żadnych danych osobowych od Operatora do operatorom reklam. Technologicznym warunkiem takich działań jest włączona obsługa plików cookie. Operator stosuje korzysta z piksela Facebooka. Ta technologia powoduje, że serwis Facebook (Facebook Inc. z siedzibą w USA) wie, że dana osoba w nim zarejestrowana korzysta z Serwisu. Bazuje w tym wypadku na danych, wobec których sam jest administratorem, Operator nie przekazuje od siebie żadnych dodatkowych danych osobowych serwisowi Facebook. Usługa bazuje na wykorzystaniu ciasteczek w urządzeniu końcowym użytkownika. Operator stosuje rozwiązanie badające zachowanie użytkowników poprzez tworzenie map ciepła oraz nagrywanie zachowania na stronie. Te informacje są anonimizowane zanim zostaną przesłane do operatora usługi tak, że nie wie on jakiej osoby fizycznej one dotyczą. W szczególności nagrywaniu nie podlegają wpisywane hasła oraz inne dane osobowe. Operator stosuje rozwiązanie automatyzujące działanie Serwisu w odniesieniu do użytkowników, np. mogące przesłać maila do użytkownika po odwiedzeniu konkretnej podstrony, o ile wyraził on zgodę na otrzymywanie korespondencji handlowej od Operatora. Operator może stosować profilowanie w rozumieniu przepisów o ochronie danych osobowych ',
                            'en' => "The operator uses statistical analysis of traffic on the site through Google Analytics (Google Inc. in the USA). The operator does not transfer personal data to the operator of this service but only anonymized information. The service is based on the use of cookies on the user's end device. The operator uses remarketing techniques allowing for matching advertising messages to the user's behavior on the site, which may give the impression that the user's personal data is being used to track them, but in practice, no personal data is transferred from the operator to advertisers.",
                            'de' => 'Der Betreiber verwendet die statistische Analyse des Website-Verkehrs durch Google Analytics (Google Inc. in den USA). Der Betreiber übermittelt keine personenbezogenen Daten an den Dienstanbieter, sondern nur anonymisierte Informationen. Der Dienst basiert auf der Verwendung von Cookies auf Endgeräten des Benutzers. Der Betreiber verwendet Remarketing-Techniken, um Anzeigen basierend auf dem Verhalten des Benutzers auf der Website anzupassen. Es findet jedoch keine Übermittlung personenbezogener Daten vom Betreiber an Werbetreibende statt.',
                        ]
                    ],
                    [
                        'header' => [
                            'pl' => '8. Informacja o plikach cookies',
                            'en' => '8. Information about Cookies',
                            'de' => '8. Informationen zu Cookies',
                        ],
                        'content' => [
                            'pl' => 'Serwis korzysta z plików cookies. Pliki cookies (tzw. „ciasteczka”) stanowią dane informatyczne, w szczególności pliki tekstowe, które przechowywane są w urządzeniu końcowym Użytkownika Serwisu i przeznaczone są do korzystania ze stron internetowych Serwisu. Cookies zazwyczaj zawierają nazwę strony internetowej, z której pochodzą, czas przechowywania ich na urządzeniu końcowym oraz unikalny numer. Podmiotem zamieszczającym na urządzeniu końcowym Użytkownika Serwisu pliki cookies oraz uzyskującym do nich dostęp jest operator Serwisu. Pliki cookies wykorzystywane są w następujących celach: utrzymanie sesji użytkownika Serwisu (po zalogowaniu), dzięki której użytkownik nie musi na każdej podstronie Serwisu ponownie wpisywać loginu i hasła; realizacji celów określonych powyżej w części "Istotne techniki marketingowe"; W ramach Serwisu stosowane są dwa zasadnicze rodzaje plików cookies: „sesyjne” (session cookies) oraz „stałe” (persistent cookies). Cookies „sesyjne” są plikami tymczasowymi, które przechowywane są w urządzeniu końcowym Użytkownika do czasu wylogowania, opuszczenia strony internetowej lub wyłączenia oprogramowania (przeglądarki internetowej). „Stałe” pliki cookies przechowywane są w urządzeniu końcowym Użytkownika przez czas określony w parametrach plików cookies lub do czasu ich usunięcia przez Użytkownika. Oprogramowanie do przeglądania stron internetowych (przeglądarka internetowa) zazwyczaj domyślnie dopuszcza przechowywanie plików cookies w urządzeniu końcowym Użytkownika. Użytkownicy Serwisu mogą dokonać zmiany ustawień w tym zakresie. Przeglądarka internetowa umożliwia usunięcie plików cookies. Możliwe jest także automatyczne blokowanie plików cookies Szczegółowe informacje na ten temat zawiera pomoc lub dokumentacja przeglądarki internetowej. Ograniczenia stosowania plików cookies mogą wpłynąć na niektóre funkcjonalności dostępne na stronach internetowych Serwisu. Pliki cookies zamieszczane w urządzeniu końcowym Użytkownika Serwisu wykorzystywane mogą być również przez współpracujące z operatorem Serwisu podmioty, w szczególności dotyczy to firm: Google (Google Inc. z siedzibą w USA), Facebook (Facebook Inc. z siedzibą w USA), Twitter (Twitter Inc. z siedzibą w USA). ',
                            'en' => "The service uses cookies. Cookies (so-called 'cookies') are computer data, in particular text files, which are stored on the end device of the Service User and are intended for use with websites. Cookies usually contain the name of the website from which they come, the time of storing them on the end device, and a unique number. The entity placing on the Service User's end device cookies and accessing them is the operator of the Service. Two basic types of cookies are used within the Service: 'session' cookies and 'persistent' cookies. 'Session' cookies are temporary files that are stored on the end device of the Service User until logging out, leaving the website or turning off the software (web browser). 'Persistent' cookies are stored on the end device of the Service User for the time specified in the parameters of cookies or until they are deleted by the Service User. The web browser usually allows storing cookies on the end device of the Service User by default. Service users can change their settings in this regard. The web browser allows you to delete cookies. It is also possible to automatically block cookies. Detailed information on this subject is provided in the help or documentation of the web browser. Restrictions on the use of cookies may affect some of the functionalities available on the Service's websites. Cookies placed on the Service User's end device may also be used by entities cooperating with the operator of the Service, in particular, it concerns companies: Google (Google Inc. in the USA), Facebook (Facebook Inc. in the USA), Twitter (Twitter Inc. in the USA).",
                            'de' => 'Der Service verwendet Cookies. Cookies sind computerbezogene Daten, insbesondere Textdateien, die auf dem Endgerät des Benutzers gespeichert und zur Nutzung der Website verwendet werden. Cookies enthalten normalerweise den Namen der Website, von der sie stammen, die Dauer ihrer Speicherung auf dem Endgerät und eine eindeutige Nummer. Die für das Setzen von Cookies verantwortliche Stelle ist der Betreiber des Dienstes. Es werden zwei Hauptarten von Cookies verwendet: „Sitzungscookies“ und „permanente Cookies“. Sitzungscookies sind temporäre Dateien, die auf dem Endgerät des Benutzers gespeichert werden, bis sie sich ausloggen oder die Website verlassen. Permanente Cookies werden für einen bestimmten Zeitraum auf dem Endgerät des Benutzers gespeichert oder bis sie vom Benutzer gelöscht werden. Die Browser-Software ermöglicht in der Regel das Speichern von Cookies auf dem Endgerät des Benutzers, und Benutzer können die Einstellungen in dieser Hinsicht ändern.',
                        ]
                    ],
                    [
                        'header' => [
                            'pl' => '9. Zarządzanie plikami cookies – jak w praktyce wyrażać i cofać zgodę?',
                            'en' => '9. Managing Cookies - How to Express and Withdraw Consent in Practice?',
                            'de' => '9. Verwaltung von Cookies - Wie kann man Zustimmung geben und zurückziehen?',
                        ],
                        'content' => [
                            'pl' => 'Jeśli użytkownik nie chce otrzymywać plików cookies, może zmienić ustawienia przeglądarki. Zastrzegamy, że wyłączenie obsługi plików cookies niezbędnych dla procesów uwierzytelniania, bezpieczeństwa, utrzymania preferencji użytkownika może utrudnić, a w skrajnych przypadkach może uniemożliwić korzystanie ze stron www W celu zarządzania ustawienia cookies wybierz z listy poniżej przeglądarkę internetową, której używasz i postępuj zgodnie z instrukcjami: Edge Internet Explorer Chrome Safari Firefox Opera Urządzenia mobilne: Android Safari (iOS) Windows Phone',
                            'en' => 'If the user does not want to receive cookies, they can change their browser settings. Please note that disabling cookies necessary for the authentication processes, security, and maintaining user preferences may make it difficult or, in extreme cases, impossible to use the website. Users of the Service can change their cookie settings depending on the web browser used',
                            'de' => 'Wenn der Benutzer keine Cookies erhalten möchte, kann er die Browsereinstellungen ändern. Beachten Sie, dass das Deaktivieren von für Authentifizierungsprozesse, Sicherheit und Beibehaltung von Benutzervorlieben erforderlichen Cookies die Nutzung der Website erschweren oder im Extremfall unmöglich machen kann. Sie können die Cookie-Einstellungen je nach verwendetem Webbrowser ändern.',
                        ]
                    ],
                ],
            ],

            //COOKIES
            [
                'page_id' => 15,
                'is_active' => true,
                'slug' => 'cookies',
                'content' => [
                    [
                        'header' => [
                            'pl' => 'Polityka Cookies',
                            'en' => 'Cookie Policy',
                            'de' => 'Cookie-Richtlinie',
                        ],
                        'points' => [
                            [
                                'pl' => 'Poniższa Polityka Cookies określa zasady zapisywania i uzyskiwania dostępu do danych na Urządzeniach Użytkowników korzystających z Serwisu do celów świadczenia usług drogą elektroniczną przez Administratora Serwisu.',
                                'en' => "The following Cookie Policy defines the rules for storing and accessing data on the devices of users using the Service for the purpose of providing electronic services by the Service Administrator.",
                                'de' => 'Die folgende Cookie-Richtlinie legt die Regeln für das Speichern und Abrufen von Daten auf den Geräten der Benutzer fest, die den Service für die Erbringung von Dienstleistungen im elektronischen Wege durch den Administrator des Dienstes nutzen.',
                            ],
                        ]
                    ],
                    [
                        'header' => [
                            'pl' => '§ 1 Definicje',
                            'en' => '§ 1 Definitions',
                            'de' => '§ 1 Definitionen',
                        ],
                        'points' => [
                            [
                                'pl' => 'Serwis - serwis internetowy działający pod adresem https://baltictennisclub.com/',
                                'en' => "Service - an internet service operating at the address https://baltictennisclub.com/",
                                'de' => 'Dienst - eine Internetseite, die unter der Adresse https://baltictennisclub.com/ betrieben wird.',
                            ],
                            [
                                'pl' => 'Serwis zewnętrzny - serwis internetowe partnerów, usługodawców lub usługobiorców Administratora',
                                'en' => "External Service - internet services of partners, service providers, or recipients of services of the Administrator",
                                'de' => 'Externer Dienst - Internetseiten von Partnern, Dienstleistern oder Dienstleistungsempfängern des Administrators.',
                            ],
                            [
                                'pl' => 'Administrator - firma Baltic Tennis Club, prowadząca działalność pod adresem: ul. Sikorskiego 1, 78-100 Kołobrzeg, Polska, o nadanym numerze identyfikacji podatkowej (NIP): 6711858306, o nadanym numerze REGON: 526794100, o nadanym numerze KRS: 987654321',
                                'en' => "Administrator - Baltic Tennis Club company, conducting business at the address: Sikorskiego 1, 78-100 Kołobrzeg, Poland, with the assigned tax identification number (NIP): 6711858306, assigned REGON number: 526794100, assigned KRS number: 987654321",
                                'de' => 'Administrator - das Unternehmen Baltic Tennis Club mit Sitz unter der Adresse: Sikorskiego 1, 78-100 Kołobrzeg, Polen, mit der Steuernummer (NIP): 6711858306, der Registrierungsnummer (REGON): 526794100, der Handelsregisternummer (KRS): 987654321.',
                            ],
                            [
                                'pl' => 'Użytkownik - osba fizyczna, dla której Administrator świadczy usługi drogą elektroniczną za pośrednictwem Serwisu.',
                                'en' => "User - a natural person for whom the Administrator provides services electronically through the Service.",
                                'de' => 'Benutzer - eine natürliche Person, für die der Administrator Dienstleistungen im elektronischen Wege über den Dienst erbringt.',
                            ],
                            [
                                'pl' => 'Urządzenie - elektroniczne urządzenie wraz z oprogramowaniem, za pośrednictwem, którego Użytkownik uzyskuje dostęp do Serwisu',
                                'en' => "Device - an electronic device with software through which the User accesses the Service.",
                                'de' => 'Gerät - ein elektronisches Gerät mit Software, über das der Benutzer auf den Dienst zugreift.',
                            ],
                            [
                                'pl' => 'Cookies (ciasteczka) - dane tekstowe gromadzone w formie plików zamieszczanych na Urządzeniu Użytkownika',
                                'en' => "Cookies - text data collected in the form of files placed on the User's Device.",
                                'de' => 'Cookies - Textdaten, die in Form von Dateien auf dem Gerät des Benutzers gespeichert werden.',
                            ],
                        ]
                    ],
                    [
                        'header' => [
                            'pl' => '§ 2 Rodzaje Cookies',
                            'en' => '§ 2 Types of Cookies',
                            'de' => '§ 2 Arten von Cookies',
                        ],
                        'points' => [
                            [
                                'pl' => 'Cookies wewnętrzne - pliki zamieszczane i odczytywane z Urządzenia Użytkownika przes system teleinformatyczny Serwisu',
                                'en' => "Internal Cookies - files placed and read from the User's Device by the teleinformation system of the Service.",
                                'de' => 'Interne Cookies - Dateien, die über das Teleinformatiksystem des Dienstes auf dem Gerät des Benutzers platziert und gelesen werden.',
                            ],
                            [
                                'pl' => 'Cookies zewnętrzne - pliki zamieszczane i odczytywane z Urządzenia Użytkownika przez systemy teleinformatyczne Serwisów zewnętrznych',
                                'en' => "External Cookies - files placed and read from the User's Device by the teleinformation systems of external Services.",
                                'de' => 'Externe Cookies - Dateien, die über die Teleinformatiksysteme externer Dienste auf dem Gerät des Benutzers platziert und gelesen werden.',
                            ],
                            [
                                'pl' => 'Cookies sesyjne - pliki zamieszczane i odczytywane z Urządzenia Użytkownika przez Serwis lub Serwisy zewnętrzne podczas jednej sesji danego Urządzenia. Po zakończeniu sesji pliki są usuwane z Urządzenia Użytkownika.',
                                'en' => "Session Cookies - files placed and read from the User's Device by the Service or external Services during one session of a given Device. After the session ends, the files are deleted from the User's Device.",
                                'de' => 'Sitzungscookies - Dateien, die während einer Sitzung einer bestimmten Gerätesitzung vom Dienst oder von externen Diensten auf dem Gerät des Benutzers platziert und gelesen werden. Nach Abschluss der Sitzung werden die Dateien vom Gerät des Benutzers gelöscht.',
                            ],
                            [
                                'pl' => 'Cookies trwałe - pliki zamieszczane i odczytywane z Urządzenia Użytkownika przez Serwis lub Serwisy zewnętrzne do momentu ich ręcznego usunięcia. Pliki nie są usuwane automatycznie po zakończeniu sesji Urządzenia chyba że konfiguracja Urządzenia Użytkownika jest ustawiona na tryb usuwanie plików Cookie po zakończeniu sesji Urządzenia.',
                                'en' => "Persistent Cookies - files placed and read from the User's Device by the Service or external Services until manually deleted. The files are not automatically deleted after the Device session ends unless the User's Device is configured to delete cookie files after the Device session ends.",
                                'de' => 'Dauerhafte Cookies - Dateien, die vom Dienst oder von externen Diensten auf dem Gerät des Benutzers platziert und gelesen werden und bis zu ihrer manuellen Löschung durch den Benutzer auf dem Gerät verbleiben. Die Dateien werden nicht automatisch nach Abschluss der Gerätesitzung gelöscht, es sei denn, die Konfiguration des Geräts des Benutzers ist auf das Löschen von Cookie-Dateien nach Abschluss der Sitzung eingestellt.',
                            ],
                        ]
                    ],
                    [
                        'header' => [
                            'pl' => '§ 3 Bezpieczeństwo',
                            'en' => '§ 3 Security',
                            'de' => '§ 3 Sicherheit',
                        ],
                        'points' => [
                            [
                                'pl' => 'Mechanizmy składowania i odczytu - Mechanizmy składowania i odczytu Cookies nie pozwalają na pobierania jakichkolwiek danych osobowych ani żadnych informacji poufnych z Urządzenia Użytkownika. Przeniesienie na Urządzenie Użytkownika wirusów, koni trojańskich oraz innych robaków jest praktynie niemożliwe.',
                                'en' => "Storage and reading mechanisms - Cookie storage and reading mechanisms do not allow the retrieval of any personal data or confidential information from the User's Device. The transfer of viruses, trojans, and other worms to the User's Device is practically impossible.",
                                'de' => 'Speicher- und Lesevorgänge - Die Mechanismen zum Speichern und Lesen von Cookies verhindern das Abrufen von personenbezogenen Daten oder vertraulichen Informationen vom Gerät des Benutzers. Es ist praktisch unmöglich, Viren, Trojaner und andere Würmer auf das Gerät des Benutzers zu übertragen.',
                            ],
                            [
                                'pl' => 'Cookie wewnętrzne - zastosowane przez Administratora Cookie wewnętrzne są bezpieczne dla Urządzeń Użytkowników',
                                'en' => "Internal Cookies - Internal Cookies used by the Administrator are safe for User Devices.",
                                'de' => 'Interne Cookies - Die vom Administrator verwendeten internen Cookies sind sicher für die Geräte der Benutzer.',
                            ],
                            [
                                'pl' => 'Cookie zewnętrzne - za bezpieczeństwo plików Cookie pochodzących od partnerów Serwisu Administrator nie ponosi odpowiedzialności. Lista partnerów zamieszczona jest w dalszej części Polityki Cookie.',
                                'en' => "External Cookies - The Administrator is not responsible for the security of cookie files originating from Service partners. The list of partners is included later in the Cookie Policy.",
                                'de' => 'Externe Cookies - Für die Sicherheit von Cookie-Dateien, die von Partnern des Service-Administrators stammen, übernimmt der Administrator keine Verantwortung. Die Liste der Partner ist weiter unten in der Cookie-Richtlinie aufgeführt.',
                            ],
                        ]
                    ],
                    [
                        'header' => [
                            'pl' => '§ 4 Cele do których wykorzystywane są pliki Cookie',
                            'en' => '§ 4 Purposes for which Cookie files are used',
                            'de' => '§ 4 Zwecke der Verwendung von Cookie-Dateien',
                        ],
                        'points' => [
                            [
                                'pl' => 'Usprawnienie i ułatwienie dostępu do Serwisu - Administrator może przechowywać w plikach Cookie informacje o prefernecjach i ustawieniach użytkownika dotyczących Serwisu aby usprawnić, polepszyć i przyśpieszyć świadczenie usług w ramach Serwisu.',
                                'en' => "Improvement and facilitation of access to the Service - The Administrator may store information about user preferences and settings for the Service in cookie files to improve, enhance, and expedite service provision within the Service.",
                                'de' => 'Verbesserung und Vereinfachung des Zugriffs auf den Service - Der Administrator kann in Cookie-Dateien Informationen zu den Präferenzen und Einstellungen des Benutzers für den Service speichern, um die Erbringung von Dienstleistungen im Rahmen des Service zu verbessern, zu optimieren und zu beschleunigen.',
                            ],
                            [
                                'pl' => 'Marketing i reklama - Administrator oraz Serwisy zewnętrzne wykorzystują pliki Cookie do celów marketingowych oraz serwowania reklam Użytkowników.',
                                'en' => "Marketing and advertising - The Administrator and external Services use cookie files for marketing purposes and serving advertisements to Users.",
                                'de' => 'Marketing und Werbung - Der Administrator und externe Dienste nutzen Cookie-Dateien zu Marketingzwecken und zum Schalten von Anzeigen für Benutzer.',
                            ],
                            [
                                'pl' => 'Dane statystyczne - Administrator oraz Serwisy zewnętrzne wykorzystuje pliki Cookie do zbirania i przetwarzania danych statystycznych takich jak np. statystyki odwiedzin, statystyki Urządzeń Użytkowników czy statystyki zachowań użytkowników. Dane te zbierane są w celu analizy i ulepszania Serwisu.',
                                'en' => "Statistical data - The Administrator and external Services use cookie files to collect and process statistical data such as visit statistics, User Device statistics, or user behavior statistics. This data is collected for the purpose of analyzing and improving the Service.",
                                'de' => 'Statistische Daten - Der Administrator und externe Dienste verwenden Cookie-Dateien, um statistische Daten wie Besuchsstatistiken, Gerätestatistiken der Benutzer und Verhaltensstatistiken der Benutzer zu sammeln und zu verarbeiten. Diese Daten werden zur Analyse und Verbesserung des Dienstes gesammelt.',
                            ],
                            [
                                'pl' => 'Serwowanie usług multimedialnych - Administrator oraz Serwisy zewnętrzne wykorzystują pliki Cookie do serwowania Użytkownikom usług multimedialnych.',
                                'en' => "Serving multimedia services - The Administrator and external Services use cookie files to serve multimedia services to Users.",
                                'de' => 'Bereitstellung multimedialer Dienste - Der Administrator und externe Dienste verwenden Cookie-Dateien, um Benutzern multimediale Dienste bereitzustellen.',
                            ],
                            [
                                'pl' => 'Usługi społecznościowe - Administrator oraz Serwisy zewnętrzne wykorzystują pliki Cookie do wsparcia usług społecznościowych',
                                'en' => "Social services - The Administrator and external Services use cookie files to support social services.",
                                'de' => 'Soziale Dienste - Der Administrator und externe Dienste nutzen Cookie-Dateien zur Unterstützung von sozialen Diensten.',
                            ],
                        ]
                    ],
                    [
                        'header' => [
                            'pl' => '§ 5 Serwisy zewnętrzne',
                            'en' => '§ 5 External Services',
                            'de' => '§ 5 Externe Dienste',
                        ],
                        'points' => [
                            [
                                'pl' => 'Administrator współpracuje z następującymi serwisami zewnętrznymi, które mogą zamieszczać pliki Cookie na Urządzeniach Użytkownika: Facebook, Twitter, Youtube',
                                'en' => "The Administrator collaborates with the following external services, which may place cookie files on User Devices: Facebook, Twitter, Youtube",
                                'de' => 'Der Administrator arbeitet mit folgenden externen Diensten zusammen, die Cookie-Dateien auf den Geräten der Benutzer platzieren können: Facebook, Twitter, Youtube',
                            ],
                        ]
                    ],
                    [
                        'header' => [
                            'pl' => '§ 6 Możliwości określania warunków przechowywania i uzyskiwania dostępu na Urządzeniach Użytkownika przez Serwis i Serwisy zewnętrzne',
                            'en' => '§ 6 Possibilities of determining conditions for storing and accessing User Devices by the Service and external Services',
                            'de' => '§ 6 Möglichkeiten zur Festlegung von Bedingungen für die Speicherung und den Zugriff auf den Geräten der Benutzer durch den Service und externe Dienste',
                        ],
                        'points' => [
                            [
                                'pl' => 'Użytkownik może w dowolnym momencie, samodzielnie zmienić ustawienia dotyczące zapisywania, usuwania oraz dostępu do danych zapisanych plików Cookies',
                                'en' => "The User can independently change settings related to the storage, deletion, and access to data stored in cookie files at any time.",
                                'de' => 'Der Benutzer kann jederzeit eigenständig die Einstellungen für das Speichern, Löschen und den Zugriff auf in Cookie-Dateien gespeicherte Daten ändern.',
                            ],
                            [
                                'pl' => 'Informacje o sposobie wyłączenia plików Cookie w najpopularniejszych przeglądarkach komputerowych i urządzeń mobilnych dostępna są na stronie: jak wyłączyć cookie.',
                                'en' => "Information on how to disable cookie files in the most popular computer and mobile browsers is available on the website: how to disable cookies.",
                                'de' => 'Informationen zum Deaktivieren von Cookie-Dateien in den gängigsten Computer- und Mobilgerätebrowsern finden Sie auf der Website: wie man Cookies deaktiviert.',
                            ],
                            [
                                'pl' => 'Użytkownik może w dowolnym momencie usunąć wszelkie zapisane do tej pory pliki Cookie korzystając z narzędzi Urządzenia Użytkownika za pośrednictwem którego Użytkowanik korzysta z usług Serwisu.',
                                'en' => "The User can delete all previously stored cookie files at any time using the tools of the User's Device through which the User uses the Service.",
                                'de' => 'Der Benutzer kann jederzeit alle bisher gespeicherten Cookie-Dateien löschen, indem er die Tools des Geräts verwendet, mit dem der Benutzer die Dienste des Dienstes nutzt.',
                            ],
                        ]
                    ],
                    [
                        'header' => [
                            'pl' => '§ 7 Wyłączenie odpowiedzialności',
                            'en' => '§ 7 Disclaimer',
                            'de' => '§ 7 Haftungsausschluss',
                        ],
                        'points' => [
                            [
                                'pl' => 'Administrator stosuje wszelkie możliwe środki w celu zapewnienia bezpieczeństwa danych umieszczanych w plikach Cookie. Należy jednak zwrócić uwagę, że zapewnienie bezpieczeństwa tych danych zależy od obu stron, w tym działalności Użytkownika oraz satnu zabezpieczeń urządzenia z którego korzysta.',
                                'en' => "The Administrator takes all possible measures to ensure the security of data placed in cookie files. However, it should be noted that the security of this data depends on both parties, including the User's activities and the security configuration of the device used by the User to access.",
                                'de' => 'Der Administrator ergreift alle möglichen Maßnahmen, um die Sicherheit von in Cookie-Dateien platzierten Daten zu gewährleisten. Es ist jedoch zu beachten, dass die Sicherheit dieser Daten von beiden Seiten abhängt, einschließlich der Aktivitäten des Benutzers und der Sicherheitskonfiguration des Geräts, von dem aus der Benutzer zugreift.',
                            ],
                            [
                                'pl' => 'Administrator nie bierze odpowiedzialności za przechwycenie danych zawartych w plikach Cookie, podszycie się pod sesję Użytkownika lub ich usunięcie, na skutek świadomej lub nieświadomej działalność Użytkownika, wirusów, koni trojańskich i innego oprogramowania szpiegującego, którymi może być zainfekowane Urządzenie Użytkownika.',
                                'en' => "The Administrator is not responsible for intercepting data contained in cookie files, impersonating a User session, or their deletion due to the conscious or unconscious activities of the User, viruses, trojans, and other spyware that may infect the User's Device.",
                                'de' => 'Der Administrator haftet nicht für das Abfangen von in Cookie-Dateien enthaltenen Daten, das Vortäuschen einer Benutzersitzung oder deren Löschung aufgrund der bewussten oder unbewussten Aktivitäten des Benutzers, Viren, Trojaner und anderer Spionagesoftware, die das Gerät des Benutzers infizieren kann.',
                            ],
                            [
                                'pl' => 'Użytkownicy w celu zabezpieczenia się przed wskazanymi w punkcie poprzednim zagrożeniami powinni stosować się do zasad cyberbezpieczeństwa.',
                                'en' => "Users, to protect themselves from the threats mentioned in the previous point, should adhere to cybersecurity principles.",
                                'de' => 'Benutzer sollten zur Absicherung gegen die in der vorherigen Klausel genannten Bedrohungen die Grundsätze der Cybersicherheit befolgen.',
                            ],
                            [
                                'pl' => 'Usługi świadczone przez podmioty trzecie są poza kontrolą Administratora. Podmioty te mogą w każdej chwili zmienić swoje warunki świadczenia usług, cel oraz wykorzystanie plików cookie. Administrator nie odpowiada na tyle na ile pozwala na to prawo za działanie plików cookies używanych przez serwisy partnerskie. Użytkownicy w każdej chwili mogą samodzielnie zarządzać zezwoleniami i ustawieniami plików cookie dla każedej dowolnej witryny.',
                                'en' => "Services provided by third parties are beyond the control of the Administrator. These entities may change their terms of service, purpose, and use of cookie files at any time. The Administrator is not liable to the extent permitted by law for the actions of cookie files used by partner services. Users can independently manage permissions and settings for cookie files for any website at any time.",
                                'de' => 'Dienstleistungen, die von Dritten erbracht werden, liegen außerhalb der Kontrolle des Administrators. Diese Dritten können ihre Bedingungen für die Erbringung von Dienstleistungen sowie den Zweck und die Verwendung von Cookie-Dateien jederzeit ändern. Der Administrator haftet nicht in dem Maße, wie es das Gesetz für die Verwendung von Cookie-Dateien durch Partnerseiten zulässt. Benutzer können jederzeit eigenständig Berechtigungen und Einstellungen für Cookie-Dateien für jede beliebige Website verwalten.',
                            ],
                        ]
                    ],
                    [
                        'header' => [
                            'pl' => '§ 8 Wymagania Serwisu',
                            'en' => '§ 8 Service Requirements',
                            'de' => '§ 8 Anforderungen des Dienstes',
                        ],
                        'points' => [
                            [
                                'pl' => 'Ograniczenie zapisu i dostępu do plików Cookie na Urządzeniu Użytkownika może spowodować nieprawidłowe działanie niektórych funkcji Serwisu.',
                                'en' => "Limiting the storage and access to cookie files on the User's Device may result in the improper functioning of some Service features.",
                                'de' => 'Die Einschränkung der Speicherung und des Zugriffs auf Cookie-Dateien auf dem Gerät des Benutzers kann zu einer fehlerhaften Funktion einiger Funktionen des Dienstes führen.',
                            ],
                            [
                                'pl' => 'Administrator nie ponosi żadnej odpowiedzialności za nieprawidłowo działające funkcje Serwisu w przypadku gdy Użytkownik ograniczy w jakikolwiek sposób możliwość zapisywania i odczytu plików Cookie.',
                                'en' => "The Administrator is not responsible for malfunctioning Service features if the User restricts the ability to store and read cookie files in any way.",
                                'de' => 'Der Administrator übernimmt keine Verantwortung für fehlerhafte Funktionen des Dienstes, wenn der Benutzer die Möglichkeit zur Speicherung und zum Lesen von Cookie-Dateien in irgendeiner Weise einschränkt.',
                            ],
                        ]
                    ],
                    [
                        'header' => [
                            'pl' => '§ 9 Zmiany w Polityce Cookie',
                            'en' => '§ 9 Changes to the Cookie Policy',
                            'de' => '§ 9 Änderungen der Cookie-Richtlinie',
                        ],
                        'points' => [
                            [
                                'pl' => 'Administrator zastrzega sobie prawo do dowolnej zmiany niniejszej Polityki Cookie bez konieczności informowania o tym użytkowników.',
                                'en' => 'The Administrator reserves the right to change this Cookie Policy at any time without the obligation to inform users.',
                                'de' => 'Der Administrator behält sich das Recht vor, diese Cookie-Richtlinie ohne die Verpflichtung zur Benachrichtigung der Benutzer jederzeit zu ändern.',
                            ],
                            [
                                'pl' => 'Wprowadzone zmiany w Polityce Cookie zawsze będą publikowane na tej stronie.',
                                'en' => 'Changes to this Cookie Policy will always be published on this page.',
                                'de' => 'Änderungen dieser Cookie-Richtlinie werden immer auf dieser Seite veröffentlicht.',
                            ],
                        ]
                    ],
                ],
            ],

            //COMPONENT
            [
                'page_id' => 16,
                'is_active' => true,
                'slug' => 'component',
                'content' => [
                    'navbar' => [
                        'first' => [
                            'pl' => 'MENU',
                            'en' => 'MENU',
                            'de' => 'MENU',
                        ],
                        'second' => [
                            'pl' => 'HOME',
                            'en' => 'STARTSEITE',
                            'de' => 'HOME',
                        ],
                        'third' => [
                            'pl' => 'KONTAKT',
                            'en' => 'KONTAKT',
                            'de' => 'CONTACT',
                        ],
                        'fourth' => [
                            'pl' => 'REZERWACJA',
                            'de' => 'RESERVIERUNG',
                            'en' => 'RESERVATION',
                        ],
                    ],
                    'header' => [
                        'first_text' => [
                            'pl' => 'Baltic Tennis Club Kołobrzeg',
                            'en' => 'Baltic Tennis Club Kołobrzeg',
                            'de' => 'Baltic Tennis Club Kołobrzeg',
                        ],
                        'second_text' => [
                            'pl' => 'Miejsce stworzone z pasji do sportu, zdrowego stylu życia i aktywnego wypoczynku.',
                            'en' => 'A place created with a passion for sports, a healthy lifestyle, and active leisure.',
                            'de' => 'Ein Ort, der aus Leidenschaft für Sport, einen gesunden Lebensstil und aktive Freizeit geschaffen wurde.',
                        ],
                        'image' => ['url' => '/gallery/2.webp'],
                    ],
                    'top_section' => [
                        'header' => [
                            'pl' => 'Nasze korty czekają na Ciebie',
                            'en' => 'Our tennis courts awaits you',
                            'de' => 'Unsere Tennisplätze erwarten Sie',
                        ],
                        'images' => [
                            ['url' => '/gallery/10.webp'],
                            ['url' => '/gallery/9.webp'],
                        ]
                    ],
                    'cookies' => [
                        'main_text' => [
                            'pl' => 'Cześć, ta strona używa wymaganych ciasteczek aby zapewnić poprawne działanie i ciasteczka trackingowe aby lepiej zrozumieć co Cie interesuje. To drugie będzie dopiero po zaakceptowaniu.',
                            'en' => 'Hello, this site uses necessary cookies to ensure proper functionality and tracking cookies to better understand what interests you. The latter will only be activated after acceptance.',
                            'de' => 'Hallo, diese Seite verwendet erforderliche Cookies, um eine ordnungsgemäße Funktion zu gewährleisten, und Tracking-Cookies, um besser zu verstehen, was Sie interessiert. Letztere werden erst nach Akzeptanz aktiviert.',
                        ],
                        'more' => [
                            'pl' => 'Czytaj więcej',
                            'en' => 'Read more',
                            'de' => 'Mehr lesen',
                        ],
                        'button_ok' => [
                            'pl' => 'OK',
                            'en' => 'OK',
                            'de' => 'OK',
                        ],
                        'button_cancel' => [
                            'pl' => 'Wychodzę',
                            'en' => 'Exit',
                            'de' => 'Verlassen',
                        ],
                    ]
                ],
            ],
        ];

        foreach ($pageElements as $pageElement) {
            \App\Models\PageElement::create($pageElement);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('page_elements');
    }
}
