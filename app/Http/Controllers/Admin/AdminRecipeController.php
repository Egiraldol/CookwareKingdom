<?php

// By Mariana Gutierrez Jaramillo

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Recipe;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class AdminRecipeController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Admin Page - Recipes - Online Store';
        $viewData['recipes'] = Recipe::all();
        $viewData['products'] = Product::all();

        return view('admin.recipe.index')->with('viewData', $viewData);
    }

    public function store(Request $request): RedirectResponse
    {
        Recipe::validate($request);

        if ($request->hasFile('image')) {
            $name = $request->input('name');
            $filename = $name.'.'.$request->file('image')->extension();
            $imagePath = 'img/'.'recipes'.'/'.$filename;
            $request->file('image')->move(public_path('img/recipes'), $filename);

        }

        $recipe = Recipe::create([
            'name' => $request->input('name'),
            'ingredients' => $request->input('ingredients'),
            'instructions' => $request->input('instructions'),
            'description' => $request->input('description'),
            'image' => $imagePath,
        ]);

        if ($request->has('products')) {
            $recipe->products()->attach($request->input('products'));
        }

        Session::flash('success', 'Element created successfully.');

        return redirect()->back();
    }

    public function edit(int $id): View
    {
        $viewData = [];
        $viewData['title'] = 'Admin Page - Edit Recipe - Online Store';
        $viewData['recipe'] = Recipe::findOrFail($id);
        $viewData['products'] = Product::all();

        return view('admin.recipe.edit')->with('viewData', $viewData);
    }

    public function update(Request $request, int $id): RedirectResponse
    {
        Recipe::validate($request);
        $recipe = Recipe::findOrFail($id);

        if ($request->hasFile('image')) {
            $name = $request->input('name');
            $filename = $name.'.'.$request->file('image')->extension();
            $imagePath = 'img/'.'recipes'.'/'.$filename;
            $request->file('image')->move(public_path('img/recipes'), $filename);
        }

        $recipe->setName($request->input('name'));
        $recipe->setDescription($request->input('description'));
        $recipe->setIngredients($request->input('ingredients'));
        $recipe->setInstructions($request->input('instructions'));
        $recipe->setImage($imagePath);

        $recipe->products()->sync($request->input('products', []));

        $recipe->save();

        return redirect()->route('admin.recipe.index');
    }

    public function delete(int $id): RedirectResponse
    {
        Recipe::destroy($id);

        return back();
    }
}
