<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	 protected $fillable = ['prenom', 'nom'];
   public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom'); 
            $table->string('prenom');
        });
    }
}
