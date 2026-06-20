<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shadow extends Model
{
    //
    use HasFactory;
    protected $fillable =['nom','email'];
    protected $guarded = ['id'];
}
