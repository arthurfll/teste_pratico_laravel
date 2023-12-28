<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
   use HasFactory;

   protected $table = 'car_models';

   protected $fillable = ['nome', 'marca', 'cor', 'ano_lancamento', 'slug_dono', 'ultima_revisao'];
}
