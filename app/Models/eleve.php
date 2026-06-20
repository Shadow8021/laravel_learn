<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

class eleve extends Model
{
    //
    public $timestamps = false;
    protected $fillable =["nom","email","status"];
    protected $guarded = ['id'];
}
