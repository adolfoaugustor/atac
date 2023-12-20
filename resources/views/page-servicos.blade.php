<!-- resources/views/page-serviços.blade.php -->
 
@extends('layouts.home')
 
@section('title', 'ATAC | Nossos serviços')

@section('menu')

@section('slide-show')
@endsection

<section class="subpage-header">
   <div class="container">
      <div class="site-title clearfix">
         <h2>{{ ucfirst($page->title) }}</h2>
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
   
   <!-- WELCOME -->
   <section class="servicos">
      <div class="container">
         <div class="heading text-center animate bounceIn">
            <h2>NOSSOS SERVIÇOS</h2>
         </div>
         
         @if ($page->body != null)
            <div class="height-50"></div>
            <div class="row text-center">
               {!! $page->body !!}
            </div>            
         @endif

         <div class="height-50"></div>
         
         <div class="row text-center">
            @foreach ($servicos as $key => $servico)
               <div class="col-md-3">
                  <div class="text-box text-center fadeInUp @if ($key === 0)
                        animate
                     @elseif ($key <= 7)
                        animate
                     @else
                        animate-it
                     @endif"
                  @if($key === 0) @else data-delay="{{ $key === 1 ? 100 : 200 }}" @endif>
                     <div class="bordered-thumb">
                        @if ($servico->image_servico)
                           <img src="{{ Voyager::image( $servico->image_servico ) }}" alt="">
                        @endif
                     </div>
                     <h4>{{ $servico->title }}</h4>
                  </div>
               </div>
            @endforeach
         </div>
      </div>
   </section><!-- / WELCOME -->
@endsection
