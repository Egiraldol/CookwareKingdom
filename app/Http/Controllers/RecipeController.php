<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\View\View;
use \Illuminate\Http\RedirectResponse;

class RecipeController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Recipes - Online Store';
        $viewData['subtitle'] = 'List of Recipes';
        $viewData['recipes'] = Recipe::all();

        return view('recipe.index')->with('viewData', $viewData);
    }

    public function show(string $id): View
    {
        $viewData = [];
        $recipe = Recipe::findOrFail($id);
        $viewData['title'] = $recipe['name'].' - Online Store';
        $viewData['subtitle'] = $recipe['name'].' - Recipe information';
        $viewData['recipe'] = $recipe;
        $viewData['ingredients'] = explode(',', $recipe->getIngredients('ingredients'));
        $viewData['instructions'] = explode(',', $recipe->getInstructions('instructions'));

        return view('recipe.show')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData = []; //to be sent to the view
        $viewData['title'] = 'Create recipe';

        return view('recipe.create')->with('viewData', $viewData);
    }

    public function save(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'ingredients' => 'required',
            'instructions' => 'required',
            'description' => 'required',
        ]);

        try {
            Recipe::create($request->only(['name', 'ingredients', 'instructions', 'description']));

            return redirect()->route('recipe.create')->with('success', 'Recipe created successfully');
        } catch (\Exception $e) {
            return redirect()->route('recipe.create')->with('error', 'Error creating recipe');
        }
    }

    public function delete(string $id): RedirectResponse
    {
        try {
            Recipe::destroy($id);

            return redirect()->route('recipe.index')->with('success', 'Recipe deleted successfully');
        } catch (\Exception $e) {
            return redirect()->route('recipe.index')->with('error', 'Error deleting recipe');
        }
    }
}
