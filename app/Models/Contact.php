<?php

namespace App\Models;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
   use HasFactory;
  
   public $fillable = ['nome', 'email', 'celular', 'assunto', 'mensagem'];
 
   public $timestamps = false;
}
