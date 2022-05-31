<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personne;
class PersonneController extends Controller
{
    public function getAll(){
        return Personne::all();
    }
}
