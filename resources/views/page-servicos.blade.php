<!-- resources/views/page-serviços.blade.php -->
 
@extends('layouts.home')
 
@section('title', 'Page')

@section('menu')

@section('slide-show')
@endsection

<section class="subpage-header">
   <div class="container">
      <div class="site-title clearfix">
         <h2>{{ ucfirst($page->slug) }}</h2>
         <ul class="breadcrumbs">
            <li><a href="{{ route('index.home') }}">Home</a></li>
         </ul>
      </div>
      <a href="contact-us.html" class="btn btn-primary get-in-touch" data-text="Contate-nos">
         <i class="icon-telephone114"></i>Contate-nos
      </a>
   </div>
</section>

@section('conteudo')
   
   <section>
      <div class="container">
         <ul class="highlighted-sec clearfix">
            <li>
               <div class="text-box animate bounceIn">
                  <i class="icon-img-1 white"></i>
                  <h4>Advisor</h4>
                  <p>Lorem ipsum dolor sit amet, Let it it floats back to you.</p>
               </div>
            </li>
            <li>
               <div class="text-box animate bounceIn" data-delay="100">
                  <i class="icon-img-2 white"></i>
                  <h4>Save Money</h4>
                  <p>Lorem ipsum dolor sit amet, Let it it floats back to you.</p>
               </div>
            </li>
            <li>
               <div class="text-box animate bounceIn" data-delay="200">
                  <i class="icon-img-3 white"></i>
                  <h4>Secure Future</h4>
                  <p>Lorem ipsum dolor sit amet, Let it it floats back to you.</p>
               </div>
            </li>
            <li>
               <div class="text-box animate bounceIn" data-delay="300">
                  <i class="icon-img-4 white"></i>
                  <h4>Business Services</h4>
                  <p>Lorem ipsum dolor sit amet, Let it it floats back to you.</p>
               </div>
            </li>
            <li>
               <div class="text-box animate bounceIn" data-delay="400">
                  <i class="icon-img-5 white"></i>
                  <h4>Financial Services</h4>
                  <p>Lorem ipsum dolor sit amet, Let it it floats back to you.</p>
               </div>
            </li>
            <li>
               <div class="text-box animate bounceIn" data-delay="500">
                  <i class="icon-img-6 white"></i>
                  <h4>Transport & Logistics</h4>
                  <p>Lorem ipsum dolor sit amet, Let it it floats back to you.</p>
               </div>
            </li>
         </ul>
      </div>
   </section>
   <!-- HIGHLIGHTED-SEC -->
@endsection
