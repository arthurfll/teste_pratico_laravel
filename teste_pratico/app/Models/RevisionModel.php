<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RevisionModel extends Model
{
   use HasFactory;

   protected $table = 'revision_models';

   protected $fillable = ['car_id'];

   public function car()
   {
       return $this->belongsTo(CarModel::class, 'car_id');
   }
}
