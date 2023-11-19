<!-- resources/views/sobre.blade.php -->
 
@extends('layouts.home')
 
@section('title', 'Page')

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
      <a href="contact-us.html" class="btn btn-primary get-in-touch" data-text="Contact us">
         <i class="icon-telephone114"></i>Contact us
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
               <p>We have over 15 years of experience Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean Lorem ipsm dolor sit the power of consectetur adi pisi cing elit, sed do eiusmod tempor xercitationemut labore. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum nec risus et suscipit Curabitur metus ipsum. But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.</p>
            </div>
            <div class="col-md-6 animate fadeInRight">
               <div class="image-widget">
                  <img src="images/about-img1.jpg" class="img-shadow" alt="">
               </div>
            </div>
         </div>
      </div>
   </section><!-- / COMPANY OVERVIEW -->
@endsection