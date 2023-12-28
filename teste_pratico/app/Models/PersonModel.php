<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonModel extends Model
{
   use HasFactory;

   protected $table = 'person_models';

   protected $fillable = ['nome', 'sobrenome', 'genero', 'slug'];

   public function cars()
   {
       return $this->hasMany(CarModel::class, 'slug_dono', 'slug');
   }
}
