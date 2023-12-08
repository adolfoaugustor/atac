<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Servico extends Model
{
   use HasFactory;
   use SoftDeletes;

   public $table = "servicos";
  
   protected $primaryKey = 'id';

   protected $dates = ['deleted_at'];

   public $fillable = [
      'title', 'image_servico'
   ];

   public $timestamps = false;
}
