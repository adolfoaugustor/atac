<!-- resources/views/sobre.blade.php -->
 
@extends('layouts.home')
 
@section('title', 'Página não encontrada')
@section('menu')

@section('slide-show')
@endsection
<section class="subpage-header">
   <div class="container">
      <div class="site-title clearfix">
         <h2>{{ Request::path() }}</h2>
         <ul class="breadcrumbs">
            <li><a href="/">Home</a></li>
         </ul>
      </div>
   </div>
</section>

@section('conteudo')
   <!-- COMPANY OVERVIEW -->
   <section>
      <div class="container">
         <div class="row">
            <div class="col-md-6 animate fadeInLeft">
               <h2>404 Desculpe,<br> página não encontrada!</h2>
               <div class="height-10"></div>
            </div>
            <div class="col-md-6 animate fadeInRight">
               <div class="image-widget">
                  <img src="images/404.jpg" class="img-responsive" alt="">
               </div>
            </div>
         </div>
      </div>
   </section><!-- / COMPANY OVERVIEW -->
@endsection