<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribuer extends Model
{
	 protected $fillable = ['id_user','jour','heure','id_pc'];
  
}
