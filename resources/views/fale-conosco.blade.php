<!-- resources/views/page-fale-conosco.blade.php -->
 
@extends('layouts.home')
 
@section('title', 'ATAC | Fale conosco')

@section('menu')

@section('slide-show')
@endsection

<section class="subpage-header">
   <div class="container">
      <div class="site-title clearfix">
         <h2>Fale Conosco</h2>
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
                  @if(Session::has('success'))
                     <div class="alert alert-success">
                        <p class="success" id="success" style="">
                           {{Session::get('success')}}
                        </p>
                     </div>
                  @endif
                  @if ($errors->any())
                  <p class="error" id="error" style="">
                     Campo(s) Obrigatório: <br>
                     @if ($errors->has('nome'))
                        Nome <br>
                     @endif
                     @if ($errors->has('celular'))
                        Telefone/Celular <br>
                     @endif
                     @if ($errors->has('email'))
                        E-mail <br>
                     @endif
                     @if ($errors->has('mensagem'))
                        Mensagem
                     @endif
                  </p>
                  @endif

                  <h3>Preencha os campos:</h3><br>
                  <form class="contact-form" id="contact_form" method="POST" action="{{ route('contact.store') }}">
                     {{ csrf_field() }}
                     <div class="row">
                        <div class="col-md-6">
                           <label for="telefone">Nome Completo</label>
                           <input type="text" data-delay="300" required placeholder="Nome Completo" name="nome" id="contact_name" class="input" value="{{ old('nome') }}">
                           @if ($errors->has('nome'))
                              <span class="text-danger">Nome obrigatório, mínimo de 5 caracteres.</span>
                           @endif
                        </div>
                        <div class="col-md-6">
                           <label for="telefone">Telefone</label>
                           <input type="text" max="16" data-delay="300" required placeholder="DDD 9 9800-0000" name="celular" id="contact_phone" class="input" value="{{ old('celular') }}">
                           @if ($errors->has('celular'))
                              <span class="text-danger">Telefone/Celular obrigatório e máximo 16, apenas numeros.</span>
                           @endif
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <label for="telefone">E-mail</label>
                           <input type="text" data-delay="300" required placeholder="E-mail" name="email" id="contact_email" class="input" value="{{ old('email') }}">
                           @if ($errors->has('email'))
                              <span class="text-danger">E-mail inválido ou vazio.</span>
                           @endif
                        </div>
                        <div class="col-md-6">
                           <label for="subject">Assunto</label>
                           <input type="text" data-delay="300" name="assunto" id="contact_subject" class="input" value="{{ old('assunto') }}">
                        </div>
                     </div>
                     <label for="telefone">Mensagem:</label>
                     <textarea data-delay="500" class="required valid" required placeholder="Informações: " name="mensagem" id="message">{{ old('mensagem') }}</textarea>
                     @if ($errors->has('mensagem'))
                        <span class="text-danger">Mensagem obrigatória.</span>
                     @endif

                     <button class="btn btn-primary" name="" type="submit" data-text="Enviar">Enviar</button>
                  </form>
               </div>
            </div>
            
         </div>
      </div>
   </section><!-- / COMPANY OVERVIEW -->
      
   <div class="map" id="map" style="border-style: solid; border-width: 2px;"></div>
   @section('scripts-extras')
      <!-- Map (include map api only once)
      ============================================= -->
      <script src="https://maps.googleapis.com/maps/api/js?v=3key=AIzaSyCA7XVaXUSfnFumdAnjgSu9TXRz1x5pQF0&amp;sensor=false"></script>
      <script src="{{ asset('js/map.js') }}"></script>
   @endsection
@endsection
