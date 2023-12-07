<!-- resources/views/sobre.blade.php -->
 
@extends('layouts.home')
 
@section('title', 'ATAC | Sobre nós')

@section('menu')


<section class="subpage-header">
   <div class="container">
      <div class="site-title clearfix">
         <h2>{{ ucfirst($page->slug) }}</h2>
         <ul class="breadcrumbs">
            <li><a href="/">Home</a></li>
         </ul>
      </div>
      <a href="contact-us.html" class="btn btn-primary get-in-touch" data-text="Contate-nos">
         <i class="icon-telephone114"></i>Contate-nos
      </a>
   </div>
</section>

@section('conteudo')
   <!-- COMPANY OVERVIEW -->
   <section>
      <div class="container">
         <div class="row">
            <div class="col-md-6 animate fadeInLeft">
               <h2>{{ $page->title }}</h2>
               <div class="height-10"></div>
               <p>{!! $page->body !!}</p>
            </div>
            <div class="col-md-6 animate fadeInRight">
               <div class="image-widget">
                  @if ($page->image)
                     <img src="{{ Voyager::image( $page->image ) }}" style="width:100%" class="img-shadow" alt="">
                  @endif
               </div>
            </div>
         </div>
      </div>
   </section><!-- / COMPANY OVERVIEW -->
@endsection