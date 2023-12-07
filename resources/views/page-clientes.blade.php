<!-- resources/views/page-clientes.blade.php -->
@extends('layouts.home')
 
@section('title', 'ATAC | Nossos clientes')

@section('menu')

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
   <!-- CASES CONTENT -->
   <section>
      <div class="container">  
         <ul id="cases-container" class="cases-container">
            <li class="entry business-services">
               <div class="cases-item animate fadeInUp">
                  <a href="#">
                     <figure>
                        <img src="{{ asset('images/cases/1.jpg') }}" alt="">
                        <figcaption>
                           <div>
                              <small>1Financial Services, Cash Flow</small>
                              Developing a strategy for clients
                           </div>
                        </figcaption>
                     </figure>
                  </a>
               </div>
            </li>
            
            <li class="entry financial-services">
               <div class="cases-item animate fadeInUp" data-delay="100">
                  <a href="#">
                     <figure>
                        <img src="{{ asset('images/cases/2.jpg') }}" alt="">
                        <figcaption>
                           <div>
                              <small>2Financial Services, Cash Flow</small>
                              Developing a strategy for clients
                           </div>
                        </figcaption>
                     </figure>
                  </a>
               </div>
            </li>
            
            <li class="entry cash-flow">
               <div class="cases-item animate fadeInUp" data-delay="200">
                  <a href="#">
                     <figure>
                        <img src="{{ asset('images/cases/3.jpg') }}" alt="">
                        <figcaption>
                           <div>
                              <small>3Financial Services, Cash Flow</small>
                              Developing a strategy for clients
                           </div>
                        </figcaption>
                     </figure>
                  </a>
               </div>
            </li>
            
            <li class="invoicing">
               <div class="cases-item animate fadeInUp" data-delay="300">
                  <a href="#">
                     <figure>
                        <img src="{{ asset('images/cases/4.jpg') }}" alt="">
                        <figcaption>
                           <div>
                              <small>4Financial Services, Cash Flow</small>
                              Developing a strategy for clients
                           </div>
                        </figcaption>
                     </figure>
                  </a>
               </div>
            </li>
            
            <li class="business-services">
               <div class="cases-item animate fadeInUp" data-delay="400"
                  <a href="#">
                     <figure>
                        <img src="{{ asset('images/cases/5.jpg') }}" alt="">
                        <figcaption>
                           <div>
                              <small>5Financial Services, Cash Flow</small>
                              Developing a strategy for clients
                           </div>
                        </figcaption>
                     </figure>
                  </a>
               </div>
            </li>
            
            <li class="cash-flow">
               <div class="cases-item animate fadeInUp" data-delay="500">
                  <a href="#">
                     <figure>
                        <img src="{{ asset('images/cases/6.jpg') }}" alt="">
                        <figcaption>
                           <div>
                              <small>6Financial Services, Cash Flow</small>
                              Developing a strategy for clients
                           </div>
                        </figcaption>
                     </figure>
                  </a>
               </div>
            </li>
            
            <li class="financial-services">
               <div class="cases-item animate fadeInUp" data-delay="600">
                  <a href="#">
                     <figure>
                        <img src="{{ asset('images/cases/7.jpg') }}" alt="">
                        <figcaption>
                           <div>
                              <small>7Financial Services, Cash Flow</small>
                              Developing a strategy for clients
                           </div>
                        </figcaption>
                     </figure>
                  </a>
               </div>
            </li>
            
            <li class="invoicing">
               
               <div class="cases-item animate fadeInUp" data-delay="700">
                  <a href="#">
                     <figure>
                        <img src="{{ asset('images/cases/8.jpg') }}" alt="">
                        <figcaption>
                           <div>
                              <small>8Financial Services, Cash Flow</small>
                              Developing a strategy for clients
                           </div>
                        </figcaption>
                     </figure>
                  </a>
               </div>
            </li>
         </ul>
         
      </div>
      
   </section>
   <!-- / CASES CONTENT -->
@endsection