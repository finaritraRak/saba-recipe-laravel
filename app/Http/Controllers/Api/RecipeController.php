<?php

namespace App\Http\Controllers\Api;

use App\Models\Recipe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RecipeController extends Controller
{
	public function index()
	{
		$recipes = Recipe::all();

		return response()->json($recipes);
	}

	public function show(Recipe $recipe)
	{
		return response()->json($recipe);
	}
}