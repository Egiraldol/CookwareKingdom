<?php

namespace Database\Seeders;

use App\Models\Recipe;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    public function run(): void
    {
        $recipeNames = ['Grilled Chicken Salad', 'Veggie Stir-Fry', 'Spaghetti Bolognese', 'Avocado Toast'];
        $recipes = Recipe::whereIn('name', $recipeNames)->get();

        foreach ($recipes as $recipe) {
            $recipe->delete();
        }

        $recipes = [
            [
                'id' => 1,
                'name' => 'Grilled Chicken Salad',
                'description' => 'A light and refreshing salad perfect for summer evenings',
                "ingredients" => "chicken breast;lettuce;tomato;cucumber;avocado;olive oil;lemon juice;salt;pepper;salt",
                "instructions" => "Grill the chicken breast until cooked through; Chop the lettuce, tomato, cucumber, and avocado; Slice the chicken and toss all ingredients together; Drizzle with olive oil and lemon juice, season with salt and pepper to taste.",
                "image" => 'receta1.jpg',
            ],
            [
                "id" => 2,
                "name" => "Veggie Stir-Fry",
                "image" => 'receta2.jpg',
                "description" => "Quick and healthy stir-fry loaded with colorful vegetables.",
                "ingredients" => "broccoli;carrot;bell pepper;mushroom;zucchini;soy sauce;sesame oil;garlic;ginger;rice",
                "instructions"=>"Heat sesame oil in a pan, add minced garlic and ginger; Stir-fry vegetables until tender; Add soy sauce and continue cooking for a few more minutes; Serve over rice.",
            ],
            [
                "id" =>9,
                "name"=>"Avocado Toast",
                "image" => 'receta4.jpg',
                "description"=>"A simple yet satisfying breakfast or snack option.",
                "ingredients"=>"bread;avocado;lime;salt;red pepper flakes",
                "instructions"=>"Toast the bread until golden brown; Mash avocado with lime juice, salt, and red pepper flakes; Spread the avocado mixture onto the toast"
            ],
            [
                "id" => 4,
                "name" => "Spaghetti Bolognese",
                "image" => 'receta3.jpg',
                "description"=>"Classic Italian pasta dish with a rich tomato and meat sauce.",
                "ingredients"=>"ground beef;onion;garlic;tomato;salt;pepper;olive oil;pasta",
                "instructions"=>"In a pan, saut\u00e9 diced onion and minced garlic in olive oil; Add ground beef and cook until browned; Stir in chopped tomatoes and simmer until sauce thickens; Serve over cooked pasta.",
            ],
        ];

        foreach ($recipes as $recipeData) {
            Recipe::create($recipeData);
        }
    }
}