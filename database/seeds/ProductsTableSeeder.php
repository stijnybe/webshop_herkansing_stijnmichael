<?php

use App\Product;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $datenow = Carbon::now();

        DB::table('products')->insert([
            'name' => 'Bier',
            'category' => 'Drank',
            'subcategory' => 'Alcoholic',
            'price' => 2.60,
            'description' => 'Beer is one of the oldest and most widely consumed alcoholic drinks in the world, and the third most popular drink overall after water and tea. Beer is brewed from cereal grains',
            'imgurl' => 'bier.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Whiskey',
            'category' => 'Drank',
            'subcategory' => 'Alcoholic',
            'price' => 9.70,
            'description' => 'Whisky or whiskey is a type of distilled alcoholic beverage made from fermented grain mash.',
            'imgurl' => 'whiskey.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Vodka',
            'category' => 'Drank',
            'subcategory' => 'Alcoholic',
            'price' => 4.55,
            'description' => 'Vodka is a clear distilled alcoholic beverage originating from Russia and Poland',
            'imgurl' => 'vodka.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Captain Morgen Kater',
            'category' => 'Drank',
            'subcategory' => 'Alcoholic',
            'price' => 8.22,
            'description' => 'Captain Morgan is a brand of rum produced by British alcohol conglomerate Diageo. Sir Henry Morgan who died on 25 August 1688. Since 2017, Live like the Captain',
            'imgurl' => 'captainmorgan.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Dropshot',
            'category' => 'Drank',
            'subcategory' => 'Alcoholic',
            'price' => 0.99,
            'description' => 'Dropshot is een Nederlandse droplikeur gebrouwen door De Kuyper in Schiedam. Het alcoholpercentage is 20%',
            'imgurl' => 'dropshot.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Vloeibaar Goud',
            'category' => 'Drank',
            'subcategory' => 'Alcoholic',
            'price' => 2.41,
            'description' => 'Pilsner is a type of pale lager. It takes its name from the Czech city of Pilsen, where it was first produced in 1842 by Bavarian brewer Josef Groll from local ingredients',
            'imgurl' => 'vloeibaargoud.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Kaasplankje',
            'category' => 'Vreten',
            'subcategory' => 'Snack',
            'price' => 4.35,
            'description' => 'Een goede kaasplank is een kunstwerk op zich. De variatiemogelijkheden zijn onbeperkt, er is geen standaard kaasplank.',
            'imgurl' => 'kaasplank.png',
            'firsthighlight' => false,
            'secondhighlight' => true,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'MacKroket',
            'category' => 'Vreten',
            'subcategory' => 'Snack',
            'price' => 3.35,
            'description' => 'A croquette is a small breadcrumbed fried food roll containing, usually as main ingredients, ground meat, shellfish, fish, ham, cheese, mashed potatoes or vegetables, and mixed with béchamel',
            'imgurl' => 'mackroket.png',
            'firsthighlight' => true,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'MacSnack',
            'category' => 'Vreten',
            'subcategory' => 'Snack',
            'price' => 1.35,
            'description' => 'eat a snack.',
            'imgurl' => 'macsnack.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => true,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Brunos Banana',
            'category' => 'Vreten',
            'subcategory' => 'Snack',
            'price' => 7.33,
            'description' => 'Bruno Banani is a German fashion company with headquarters in Chemnitz. On 11 March 2009 with class 1 Oeko-tex standard rating',
            'imgurl' => 'brunobanana.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Kroeppoep',
            'category' => 'Vreten',
            'subcategory' => 'Snack',
            'price' => 2.98,
            'description' => 'Krupuk or kerupuk or kroepoek are deep fried crackers made from starch and other ingredients that serve as flavouring. They are a popular snack in parts of Southeast Asia,',
            'imgurl' => 'kroepoek.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Willy Wonkas MonkaS',
            'category' => 'Vreten',
            'subcategory' => 'Snack',
            'price' => 13.11,
            'description' => 'monkaS is a custom emote from the twitch extension BTTV, created by a person named "MonkaSenpai" hence the name "monkaS" every other Pepe the Frog emote',
            'imgurl' => 'monkas.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Broodje Aap',
            'category' => 'Vreten',
            'subcategory' => 'Snack',
            'price' => 2.94,
            'description' => 'In Nederland noemen we dat soort verhalen \'broodje aap verhalen\'. Het zijn verhalen die mensen elkaar als waargebeurd doorvertellen',
            'imgurl' => 'broodjeaap.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);


        DB::table('products')->insert([
            'name' => 'Wijn',
            'category' => 'Drank',
            'subcategory' => 'Alcoholic',
            'price' => 3.30,
            'description' => 'Wine is an alcoholic drink made from fermented grapes. Yeast consumes the sugar in the grapes and converts it to ethanol, carbon dioxide, and heat.',
            'imgurl' => 'wijn.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Borrelnootjes',
            'category' => 'Vreten',
            'subcategory' => 'Snack',
            'price' => 1.35,
            'description' => 'Een borrelnootje (ook wel cocktail-, knabbel- of partynootje) is een nootje ... Alleen Duyvis mag deze nootjes dus verkopen onder de naam \'Borrelnootjes\'.',
            'imgurl' => 'borrelnootjes.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Bitterballen',
            'category' => 'Vreten',
            'subcategory' => 'Snack',
            'price' => 5.50,
            'description' => 'Bitterballen are a Dutch meat-based snack, typically containing a mixture of beef or veal, beef broth, butter, flour for thickening, parsley, salt and pepper, resulting in a thick roux. ',
            'imgurl' => 'bitterballen.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Tosti',
            'category' => 'Vreten',
            'subcategory' => 'Middagvreten',
            'price' => 3.60,
            'description' => 'A croque monsieur is a baked or fried boiled ham and cheese sandwich. A croque madame is a variant of the dish topped with a fried egg',
            'imgurl' => 'tosti.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Tosti Hamkaas',
            'category' => 'Vreten',
            'subcategory' => 'Middagvreten',
            'price' => 3.60,
            'description' => 'A croque monsieur is a baked or fried boiled ham and cheese sandwich. A croque madame is a variant of the dish topped with a fried egg',
            'imgurl' => 'tostihamkaas.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Aspergesoep',
            'category' => 'Vreten',
            'subcategory' => 'Middagvreten',
            'price' => 2.88,
            'description' => 'Wit én vloeibaar goud: aspergesoep. Zodra asperges in het seizoen zijn, liggen ze op ons bord. Of, in dit geval, in onze kom.',
            'imgurl' => 'aspergesoep.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Tomatensoep',
            'category' => 'Vreten',
            'subcategory' => 'Middagvreten',
            'price' => 2.60,
            'description' => 'Tomato soup is a soup made with tomatoes as the primary ingredient. It may be served hot or cold in a bowl, cream and chicken/vegetable stock',
            'imgurl' => 'tomatensoep.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Visserssoep',
            'category' => 'Vreten',
            'subcategory' => 'Middagvreten',
            'price' => 2.60,
            'description' => 'De wortel en de prei schoonmaken en in luciferdunne reepjes snijden. De zalm schoonmaken en in blokjes van ? 2 cm. snijden.',
            'imgurl' => 'visserssoep.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Goedkope soep',
            'category' => 'Vreten',
            'subcategory' => 'Middagvreten',
            'price' => 0.60,
            'description' => 'De wortel en de prei schoonmaken en in luciferdunne reepjes snijden. De zalm schoonmaken en in blokjes van ? 2 cm. snijden.',
            'imgurl' => 'goedkopesoep.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Groentesoep',
            'category' => 'Vreten',
            'subcategory' => 'Middagvreten',
            'price' => 2.60,
            'description' => 'Een goed gevulde zelfgemaakte groentesoep. Deze gevulde groentesoep kun je prima als hoofdgerecht eten.',
            'imgurl' => 'groentesoep.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Fruitsoep',
            'category' => 'Vreten',
            'subcategory' => 'Middagvreten',
            'price' => 2.60,
            'description' => 'Find free login start FRUTS - you can check in one-click in yahoo.com, hotmail.com, outlook.com, gmail.com, aol.com, yandex.ru, facebook.com, pinterest.com',
            'imgurl' => 'fruitsoep.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Dure soep',
            'category' => 'Vreten',
            'subcategory' => 'Middagvreten',
            'price' => 21.63,
            'description' => 'groentesoep',
            'imgurl' => 'duresoep.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Budget soep',
            'category' => 'Vreten',
            'subcategory' => 'Middagvreten',
            'price' => 2.21,
            'description' => 'groentesoep',
            'imgurl' => 'budgetsoep.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Frietje met',
            'category' => 'Vreten',
            'subcategory' => 'Middagvreten',
            'price' => 1.60,
            'description' => 'Een friet met is de afkorting van een friet met mayonaise of zoals je tegenwoordig meestal in Nederland krijgt, een frietje met frietsaus',
            'imgurl' => 'frietmet.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Bammetje kaas',
            'category' => 'Vreten',
            'subcategory' => 'Ochtendvreten',
            'price' => 1.20,
            'description' => 'Warm, knapperig borrelbrood met kaas, boter en verse kruiden.',
            'imgurl' => 'bammetjekaas.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Bammetje ham',
            'category' => 'Vreten',
            'subcategory' => 'Ochtendvreten',
            'price' => 1.30,
            'description' => 'Warm, knapperig borrelbrood met ham, boter en verse kruiden.',
            'imgurl' => 'bammetjeham.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Bammetje nutella',
            'category' => 'Vreten',
            'subcategory' => 'Ochtendvreten',
            'price' => 1.11,
            'description' => 'Warm, knapperig borrelbrood met nutella, boter en verse kruiden.',
            'imgurl' => 'bammetjenutella.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Bammetje frikandel',
            'category' => 'Vreten',
            'subcategory' => 'Ochtendvreten',
            'price' => 0.69,
            'description' => 'Warm, knapperig borrelbrood met frikandel, boter en verse kruiden.',
            'imgurl' => 'bammetjefrikandel.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Bammetje droog',
            'category' => 'Vreten',
            'subcategory' => 'Ochtendvreten',
            'price' => 0.60,
            'description' => 'Warm, knapperig borrelbrood en verse kruiden.',
            'imgurl' => 'bammetje.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Bammetje nat',
            'category' => 'Vreten',
            'subcategory' => 'Ochtendvreten',
            'price' => 0.34,
            'description' => 'Warm, knapperig borrelbrood met boter en verse kruiden.',
            'imgurl' => 'bammetjenat.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Croissant',
            'category' => 'Vreten',
            'subcategory' => 'Ochtendvreten',
            'price' => 1.60,
            'description' => 'A croissant is a buttery, flaky, viennoiserie pastry of Austrian origin, named for its historical crescent shape.',
            'imgurl' => 'croissant.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Ommelet du Fromage',
            'category' => 'Vreten',
            'subcategory' => 'Ochtendvreten',
            'price' => 3.72,
            'description' => 'It\'s a joke from Dexter\'s laboratory, in one of the episode Dexter try to seduce girl by speaking "Omelette au fromage" however means cheese omelette',
            'imgurl' => 'omeletdufromage.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Spinazi',
            'category' => 'Vreten',
            'subcategory' => 'Avondvreten',
            'price' => 5.44,
            'description' => 'Spinach is a leafy green flowering plant native to central and western Asia. It is of the order Caryophyllales, family Amaranthaceae, subfamily Chenopodioideae.',
            'imgurl' => 'spinazi.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Asperges',
            'category' => 'Vreten',
            'subcategory' => 'Avondvreten',
            'price' => 4.44,
            'description' => 'Witte asperges! Als ze er zijn, kunnen we er geen genoeg van krijgen. Recepten met witte asperges zoals aspergesoep, quiches of de klassieke witte asperges',
            'imgurl' => 'asperge.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Riks Hogepunten',
            'category' => 'Vreten',
            'subcategory' => 'Avondvreten',
            'price' => 2.44,
            'description' => 'Een overzicht van de hoogste punten in het Koninkrijk der Nederlanden van het maaiveld per administratief gebied, ten opzichte van zeeniveau.',
            'imgurl' => 'hogepunten.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Piepers',
            'category' => 'Vreten',
            'subcategory' => 'Avondvreten',
            'price' => 2.44,
            'description' => 'Volgens \'t Rheinisches Wörterbuch kumt pieper van de Middelnederlandse vörm pippink. Di beteikent: pit van de vrucht betekent. ',
            'imgurl' => 'pieper.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Tatoes',
            'category' => 'Vreten',
            'subcategory' => 'Avondvreten',
            'price' => 2.43,
            'description' => 'Volgens \'t Rheinisches Wörterbuch kumt pieper van de Middelnederlandse vörm pippink. Di beteikent: pit van de vrucht betekent. ',
            'imgurl' => 'tatoes.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Aardappelen',
            'category' => 'Vreten',
            'subcategory' => 'Avondvreten',
            'price' => 5.42,
            'description' => 'Volgens \'t Rheinisches Wörterbuch kumt pieper van de Middelnederlandse vörm pippink. Di beteikent: pit van de vrucht betekent. ',
            'imgurl' => 'aardappelen.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Patatos',
            'category' => 'Vreten',
            'subcategory' => 'Avondvreten',
            'price' => 5.24,
            'description' => 'Volgens \'t Rheinisches Wörterbuch kumt pieper van de Middelnederlandse vörm pippink. Di beteikent: pit van de vrucht betekent. ',
            'imgurl' => 'patatos.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Piepertjes',
            'category' => 'Vreten',
            'subcategory' => 'Avondvreten',
            'price' => 5.44,
            'description' => 'Volgens \'t Rheinisches Wörterbuch kumt pieper van de Middelnederlandse vörm pippink. Di beteikent: pit van de vrucht betekent. ',
            'imgurl' => 'piepertjes.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Patatten',
            'category' => 'Vreten',
            'subcategory' => 'Avondvreten',
            'price' => 1.44,
            'description' => 'Volgens \'t Rheinisches Wörterbuch kumt pieper van de Middelnederlandse vörm pippink. Di beteikent: pit van de vrucht betekent. ',
            'imgurl' => 'patatten.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Stamppot',
            'category' => 'Vreten',
            'subcategory' => 'Avondvreten',
            'price' => 5.34,
            'description' => 'Van boerenkoolstamppot tot stamppot rauwe andijvie, de beste klassiekers op een rij. Maak zelf de lekkerste stamppotten met de allerbeste stamppotrecepten',
            'imgurl' => 'stamppot.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Water',
            'category' => 'Drank',
            'subcategory' => 'Zwakkelingendrank',
            'price' => 1.44,
            'description' => 'Water is a transparent, tasteless, odorless, and nearly colorless chemical substance, which is the main. ',
            'imgurl' => 'water.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Cola',
            'category' => 'Drank',
            'subcategory' => 'Zwakkelingendrank',
            'price' => 1.33,
            'description' => 'Cola is a sweetened, carbonated soft drink flavored with vanilla, cinnamon, citrus oils and other flavorings. ',
            'imgurl' => 'cola.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Pepsi',
            'category' => 'Drank',
            'subcategory' => 'Zwakkelingendrank',
            'price' => 1.11,
            'description' => 'Cola maar dan niet',
            'imgurl' => 'pepsi.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Melk',
            'category' => 'Drank',
            'subcategory' => 'Zwakkelingendrank',
            'price' => 1.13,
            'description' => 'Milk is a nutrient-rich, white liquid food produced by the mammary glands of mammals.',
            'imgurl' => 'melk.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'ZevenOmhoog',
            'category' => 'Drank',
            'subcategory' => 'Zwakkelingendrank',
            'price' => 1.44,
            'description' => 'Cola maar dan sevenup',
            'imgurl' => 'sevenup.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Bubbly water',
            'category' => 'Drank',
            'subcategory' => 'Zwakkelingendrank',
            'price' => 3.44,
            'description' => 'Bubbeltjes water',
            'imgurl' => 'bubblywater.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Sleutelhanger',
            'category' => 'Overig',
            'subcategory' => 'Snuisterijen',
            'price' => 2.43,
            'description' => 'Een sleutelhanger draag je altijd bij je en is dus een superleuk en praktisch cadeau! Bekijk hier de leukste sleutelhangers om iemand mee te verrassen!',
            'imgurl' => 'sleutelhanger.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Geurkaarsen',
            'category' => 'Overig',
            'subcategory' => 'Snuisterijen',
            'price' => 5.83,
            'description' => 'Geurkaarsen en geurlichtjes geven naast sfeer een lekkere geur in huis. Zo kun je je huis lekker naar vanille, lavendel of vers linnengoed laten ruiken.',
            'imgurl' => 'geurkaarsen.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Vegan Krijt',
            'category' => 'Overig',
            'subcategory' => 'Snuisterijen',
            'price' => 7.53,
            'description' => 'Aldi snoepkrijt, vegan Vegan schoolkrijtdropjes! Dit was altijd één van mijn favoriete soorten drop, dus ik was best verdrietig',
            'imgurl' => 'vegankrijt.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Koekoek klok',
            'category' => 'Overig',
            'subcategory' => 'Houtwerk',
            'price' => 43.23,
            'description' => 'Een koekoeksklok is een slingerklok, die de uren aangeeft door het nadoen van het geluid van een koekoek. Meestal zet het slaguurwerk een mechanisme in',
            'imgurl' => 'koekoekklok.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Houten zadeltas',
            'category' => 'Overig',
            'subcategory' => 'Houtwerk',
            'price' => 73.23,
            'description' => 'FastRider Zadeltas Excludus 0,7 liter zwart FASTR. ZADELTAS EXCLUDUS ZWART FastRider Zadeltas Excludus 0,7 liter zwart. 16,99',
            'imgurl' => 'houtenzadeltas.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Saaie Stoel',
            'category' => 'Overig',
            'subcategory' => 'Houtwerk',
            'price' => 88.99,
            'description' => 'Stoelen zijn er om lekker op te kunnen zitten. Een stoel is er in alle soorten en maten, van eetkamerstoelen tot bureaustoelen.',
            'imgurl' => 'saaiestoel.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        DB::table('products')->insert([
            'name' => 'Interessante stoel',
            'category' => 'Overig',
            'subcategory' => 'Houtwerk',
            'price' => 23.23,
            'description' => 'Stoelen zijn er om lekker op te kunnen zitten. Een stoel is er in alle soorten en maten, van eetkamerstoelen tot bureaustoelen.',
            'imgurl' => 'interessantestoel.png',
            'firsthighlight' => false,
            'secondhighlight' => false,
            'thirdhighlight' => false,
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);
    }
}
