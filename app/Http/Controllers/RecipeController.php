<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{
    public function index()
    {
        return view('recipe');
    } 
    public function recipe(recipe $recipe)
    {
        $result=Recipe::inRandomOrder()->first();
        return view('resultrecipe')->with(['recipe'=>$result]);
    } 
}
