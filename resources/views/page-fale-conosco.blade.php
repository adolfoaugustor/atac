<!-- resources/views/page-fale-conosco.blade.php -->
 
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
            <li><a href="/">Home</a></li>
         </ul>
      </div>
      <a href="contact-us.html" class="btn btn-primary get-in-touch" data-text="Contate-nos">
         <i class="icon-telephone114"></i>Contate-nos
      </a>
   </div>
</section>

@section('conteudo')
   <!-- CONTACT US -->
   <section>
      <div class="container">
         <div class="row">
            <div class="col-md-6 col-sm-6 animate fadeInLeft">
               <h3>{{ $page->title }}</h3>
               <div class="row">
                  <div class="col-md-12 col-sm-12">
                  @if ($page->image)
                     <img src="{{ Voyager::image( $page->image ) }}" class="quries-img img-responsive" alt="">
                  @endif
                     
                  </div>
                  <div class="col-md-12 col-sm-12">
                     <p>{!! $page->body !!}</p>
                  </div>
               </div>
               
            </div>
            
            <div class="form">
               <div class="col-md-6 col-sm-6 animate fadeInRight">
               
                  <p class="success" id="success" style="display:none;"></p>
                  <p class="error" id="error" style="display:none;"></p>
                  <h3>Preencha os campos:</h3>
                  <form class="contact-form" name="contact_form" id="contact_form" method="post" action="#" onSubmit="return false">
                     <div class="row">
                        <div class="col-md-6">
                           <input type="text" data-delay="300" placeholder="Nome Completo" name="contact_name" id="contact_name" class="input">
                        </div>
                        <div class="col-md-6">
                           <input type="text" data-delay="300" placeholder="E-mail" name="contact_email" id="contact_email" class="input">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <input type="text" data-delay="300" placeholder="Telefone/Celular" name="contact_phone" id="contact_phone" class="input">
                        </div>
                     </div>
                     <textarea data-delay="500" class="required valid" placeholder="Informações: " name="message" id="message"></textarea>
                     <button class="btn btn-primary" name="" type="submit" data-text="Enviar" onClick="validateContact();">Enviar</button>
                  </form>
               </div>
            </div>
            
         </div>
      </div>
   </section><!-- / COMPANY OVERVIEW -->
      
   <div class="map" id="map"></div>
   @section('scripts-extras')
      <!-- Map (include map api only once)
      ============================================= -->
      <script src="https://maps.googleapis.com/maps/api/js?v=3key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&amp;sensor=false"></script>
      <script src="js/map.js"></script>
   @endsection
@endsection
