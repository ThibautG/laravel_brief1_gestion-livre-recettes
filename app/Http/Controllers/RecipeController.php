<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecipeController extends Controller
{
   public function index()
   {
       $recipes = Recipe::all();
       return view('recipes.index', compact('recipes'));
   }

   public function create()
   {
       return view('recipes.create');
   }

   public function store(Request $request)
   {
       $request->validate([
           'title' => 'required|string|max:255',
           'description' => 'required|string',
       ]);

       /*Recipe::create($request->all());*/
       DB::table('recipes')->insert([
           'title' => $request->title,
           'description' => $request->description
       ]);
       return redirect()->route('recipes.index')->with('success', 'Recipe created successfully.');
   }

    public function edit(Recipe $recipe)
    {
        return view('recipes.edit', compact('recipe'));
    }

    public function update(Request $request, Recipe $recipe)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        /*$recipe->update($request->all());*/
        DB::table('recipes')
            ->where('id', $recipe->id)
            ->update([
            'title' => $request->title,
            'description' => $request->description
        ]);
        return redirect()->route('recipes.index')->with('success', 'Recipe updated successfully.');
    }

    public function destroy(Recipe $recipe)
    {
        $recipe->delete();
        return redirect()->route('recipes.index')->with('success', 'Recipe deleted successfully.');
    }
}

