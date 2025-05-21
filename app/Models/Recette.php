<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Recette
{
    public function getAll():array
    {
      return [
          1 => [
              'title' => 'Recette 1',
              'description' => 'Description de la recette 1',
              'ingredients' => ['Ingrédient 1', 'Ingrédient 2', 'Ingrédient 3'],
              'instructions' => 'Instructions de la recette 1',
          ],
          2 => [
              'title' => 'Recette 2',
              'description' => 'Description de la recette 2',
              'ingredients' => ['Ingrédient A', 'Ingrédient B', 'Ingrédient C'],
              'instructions' => 'Instructions de la recette 2',
          ],
          3 => [
              'title' => 'Recette 3',
              'description' => 'Description de la recette 3',
              'ingredients' => ['Ingrédient X', 'Ingrédient Y', 'Ingrédient Z'],
              'instructions' => 'Instructions de la recette 3',
          ],
      ];
    }

    public function getById(int $id):array {
        $recettes = $this->getAll();

        $recette_vide = ['title' => 'Recette introuvable', 'description' => 'Aucune description',
            'ingredients' => ['Aucun ingrédient', 'Jamais', 'FIN'], 'instructions' => 'Aucune instruction'];

        return Arr::get($recettes, $id, $recette_vide);
    }

};
