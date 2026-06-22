<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class auteur extends Model
{
    //
    public function livre(){
        return $this->hasOn(livre::class);
    }
}
