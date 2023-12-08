<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Banner extends Model
{
   use HasFactory;
   public $table = "banners";
  
   protected $primaryKey = 'id';

   public $fillable = [
      'title', 'description', 'image', 'button1', 'link_btn1', 'button2', 'link_btn2', 'align', 'order'
   ];

   public $timestamps = true;
}