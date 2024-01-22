<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LinkUtil extends Model
{
   use HasFactory;

   public $table = "links_uteis";

   protected $primaryKey = 'id';

   protected $dates = ['deleted_at'];

   public $fillable = [
      'title', 'url', 'image_link'
   ];

   public $timestamps = false;
}
