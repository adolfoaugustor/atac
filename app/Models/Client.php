<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use TCG\Voyager\Traits\Resizable;

class Client extends Model
{
   use Resizable;
   use HasFactory;
   use SoftDeletes;
  
   public $table = "clients";
  
   protected $primaryKey = 'id';

    protected $dates = ['deleted_at'];
   
    public $fillable = [
      'name', 'description', 'image_client'
   ];
}
