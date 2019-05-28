<?php

use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $datenow = Carbon::now();
        $categoryAlcolicsDrink = new Category;
        $categoryAlcolicsDrink->id = 1;
        $categoryAlcolicsDrink->category = "Drank";
        $categoryAlcolicsDrink->subcategory = "Alcoholic";
        $categoryAlcolicsDrink->created_at = $datenow;
        $categoryAlcolicsDrink->updated_at = $datenow;
        $categoryAlcolicsDrink->save();


        $categoryEveningFood = new Category;
        $categoryEveningFood->id = 2;
        $categoryEveningFood->category = "Vreten";
        $categoryEveningFood->subcategory = "Avondvreten";
        $categoryEveningFood->created_at = $datenow;
        $categoryEveningFood->updated_at = $datenow;
        $categoryEveningFood->save();

        $categoryMorningfood = new Category;
        $categoryMorningfood->id = 3;
        $categoryMorningfood->category = "Vreten";
        $categoryMorningfood->subcategory = "Ochtendvreten";
        $categoryMorningfood->created_at = $datenow;
        $categoryMorningfood->updated_at = $datenow;
        $categoryMorningfood->save();

        $categoryLunchFood = new Category;
        $categoryLunchFood->id = 4;
        $categoryLunchFood->category = "Vreten";
        $categoryLunchFood->subcategory = "Middagvreten";
        $categoryLunchFood->created_at = $datenow;
        $categoryLunchFood->updated_at = $datenow;
        $categoryLunchFood->save();

        $categoryWeaklingsDrink = new Category;
        $categoryWeaklingsDrink->id = 5;
        $categoryWeaklingsDrink->category = "Drank";
        $categoryWeaklingsDrink->subcategory = "Zwakkelingendrank";
        $categoryWeaklingsDrink->created_at = $datenow;
        $categoryWeaklingsDrink->updated_at = $datenow;
        $categoryWeaklingsDrink->save();

        $categorySnuisterijen = new Category;
        $categorySnuisterijen->id = 6;
        $categorySnuisterijen->category = "Overig";
        $categorySnuisterijen->subcategory = "Snuisterijen";
        $categorySnuisterijen->created_at = $datenow;
        $categorySnuisterijen->updated_at = $datenow;
        $categorySnuisterijen->save();

        $categoryWoodworking = new Category;
        $categoryWoodworking->id = 7;
        $categoryWoodworking->category = "Overig";
        $categoryWoodworking->subcategory = "Houtwerk";
        $categoryWoodworking->created_at = $datenow;
        $categoryWoodworking->updated_at = $datenow;
        $categoryWoodworking->save();

        $categorySnack = new Category;
        $categorySnack->id = 8;
        $categorySnack->category = "Vreten";
        $categorySnack->subcategory = "Snack";
        $categorySnack->created_at = $datenow;
        $categorySnack->updated_at = $datenow;
        $categorySnack->save();
    }
}
