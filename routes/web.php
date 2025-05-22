<?php

use App\Models\Recette;
use App\Http\Controllers\RecipesController;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::view('/', 'welcome');
Route::view('/projects', 'projects');

Route::get('/recettes', function () {

    $model = new Recette();
    $recettes = $model->getAll();

    return view('recettes.index', compact('recettes'));
    /*compact pour renommer la variable retournée*/
})->name('recettes.index');


Route::get('/recettes/{id}', function (int $id){
    /*on type l'id tout de suite*/

    /*dd($id);  */
    /* on utilise le dd qui est un vardump qui stoppe éxécution appli*/

    $model = new Recette();
    $recette = $model->getById($id);

    return view('recettes.show', compact('recette'));
})->name('recettes.show');

/* Route pour le brief -- resource */
Route::resource('recipes', RecipesController::class)

?>
