<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('Livres',function(Blueprint $table){
            $table->id();
            $table->string('titre');
            $table->string('description');
            $table->interger('annee');
            $table->unsignedBigInteger('user_id');
            $table->foreign("user_id")->references('id')->on('users')->onDelete('cascade');
        });
    }

    
};
