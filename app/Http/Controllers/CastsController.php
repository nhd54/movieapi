<?php

namespace App\Http\Controllers;

use App\Casts;
use Illuminate\Http\Request;

class CastsController extends Controller
{
    public function index($id)
    {
        $casts = Casts::find($id);


        return [
            'id' => $casts->ID,
            'name' => $casts->Name
        ];
    }
}

