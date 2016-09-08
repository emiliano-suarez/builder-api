<?php

namespace App\Http\Controllers;

use App\Models\Material;

class MaterialController extends Controller
{

    public function getAll()
    {
        $materials = Material::all();
/*
        foreach($materials as $itemObj) {

            echo $itemObj['_id'] . "-";
            echo $itemObj['attributes'][0]['title'] . "\n";
        }
*/
        return response()->json($materials);
    }

    public function getById($id)
    {
        $material = Material::find($id);
        return response()->json($material);
    }

}
