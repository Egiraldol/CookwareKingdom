<?php

namespace App\Http\Controllers\Admin;


use App\Models\Recipe;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


class AdminRecipeController extends Controller
{

    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Recipes - Online Store";
        $viewData["recipes"] = Recipe::all();
        return view('admin.recipe.index')->with("viewData", $viewData);
    }

    public function store(Request $request)
    {
        Recipe::validate($request);
        Recipe::create($request->only(['name', 'ingredients', 'instructions', 'description', 'image']));

        Session::flash('success', 'Element created successfully.');

        return redirect()->back();
    }

    public function edit($id)
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Edit Recipe - Online Store";
        $viewData["recipe"] = Recipe::findOrFail($id);
        return view('admin.recipe.edit')->with("viewData", $viewData);
    }

    public function update(Request $request, $id)
    {
        Recipe::validate($request);
        $recipe = Recipe::findOrFail($id);
        
        $recipe->setName($request->input('name'));
        $recipe->setDescription($request->input('description'));
        $recipe->setIngredients($request->input('ingredients'));
        $recipe->setInstructions($request->input('instructions'));
        $recipe->setImage($request->input('image'));

        $recipe->save();
        return redirect()->route('admin.recipe.index');
    } 


    public function delete($id)
    {
        Recipe::destroy($id);
        return back();
    }
}
