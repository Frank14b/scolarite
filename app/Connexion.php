<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Connexion extends Model
{
    public function user(){
        return ['frank', 'thierry', 'christian'];
    }
}
