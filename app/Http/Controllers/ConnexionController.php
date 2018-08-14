<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Connexion;

class ConnexionController extends Controller
{
    function instanceModel(){
        $connex = new Connexion;
        return $connex;
    }

    public function index(){
        $nom = $this->instanceModel()->user();
        return view('login', ['user' => $nom, 'name'=>'Connexion']);
    }
}
