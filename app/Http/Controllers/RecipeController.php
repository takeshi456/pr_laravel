<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use Illuminate\Support\Facades\DB;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()

    {
        $recipes = DB::table('recipes')->select('id', 'name', 'calorie')->get();
        return view('recipe.index', compact(('recipes')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recipe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     */
    public function store(Request $request)
    {
        $recipe = new Recipe();
        $recipe->name = $request->input('name');
        $recipe->calorie = $request->input('calorie');
        $recipe->save();
        return redirect('recipe');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recipe = Recipe::find($id);
        return view('recipe.show', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     */
    public function edit($id)
    {
        $recipe = Recipe::find($id);
        return view('recipe.edit', compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     *
     */
    public function update(Request $request, $id)
    {
        $recipe = Recipe::find($id);
        $recipe->name = $request->input('name');
        $recipe->calorie = $request->input('calorie');
        $recipe->save();
        return redirect('recipe');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     */
    public function destroy($id)
    {
        $recipe = Recipe::find($id);
        $recipe->delete();
        return redirect('recipe');
    }
}
