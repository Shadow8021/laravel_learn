<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    //
    public $timestamps = false;
    protected $fillable = ['nom','auteur'];
    protected $guarded = ['id'];
}
