<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personne;
class PersonneController extends Controller
{
    public function getAll(){
        return Personne::all();
    }
    public function save(Request $req){
        $p=new Personne();
        $p->nom=$req->nom;
        $p->prenom=$req->prenom;
        $p->age=$req->age;
        $p->save();
    }
}
