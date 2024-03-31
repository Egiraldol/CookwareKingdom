<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
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
        $viewData = []; 
        $viewData['title'] = 'Create recipe';

        return view('recipe.create')->with('viewData', $viewData);
    }

    public function save(Request $request): RedirectResponse
    {
        Recipe::validate($request);

        Recipe::create($request->only(['name', 'ingredients', 'instructions', 'description']));

        Session::flash('success', 'Element created successfully.');

        return redirect()->back();
    }

    public function delete($id): RedirectResponse
    {
        Recipe::destroy($id);

        Session::flash('success', 'Recipe deleted successfully.');

        return redirect()->route('recipe.index');
    }
}
