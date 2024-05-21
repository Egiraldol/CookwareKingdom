<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\RecipeResource;
use App\Models\Recipe;
use Illuminate\Http\JsonResponse;

class RecipeApiController extends Controller
{
    public function index(): JsonResponse
    {
        $recipes = RecipeResource::collection(Recipe::all());
        return response()->json($recipes, 200);
    }

    public function show(string $id): JsonResponse
    {
        $recipe = Recipe::findOrFail($id);
        return response()->json($recipe, 200);
    }
}