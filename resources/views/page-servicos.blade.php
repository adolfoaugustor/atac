<!-- resources/views/page-serviços.blade.php -->
 
@extends('layouts.home')
 
@section('title', 'ATAC | Nossos serviços')

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
   
   <!-- WELCOME -->
   <section class="servicos">
      <div class="container">
         <div class="heading text-center animate bounceIn">
            <h2>NOSSOS SERVIÇOS</h2>
         </div>
         
         <div class="height-50"></div>
         
         <div class="row text-center">
            <div class="col-md-3">
               <div class="text-box text-center animate fadeInUp">
                  <div class="bordered-thumb"><img src="{{ asset('images/icones-servicos/tombamento.png') }}" alt=""></div>
                  <h4>Tombamento de Imobilizado</h4>
               </div>
            </div>
            <div class="col-md-3 animate fadeInUp" data-delay="100">
               <div class="text-box text-center">
                  <div class="bordered-thumb"><img src="{{ asset('images/icones-servicos/pareceres.png') }}" alt=""></div>
                  <h4>Emissão de Pareceres</h4>
               </div>
            </div>
            <div class="col-md-3 animate fadeInUp" data-delay="200">
               <div class="text-box text-center">
                  <div class="bordered-thumb"><img src="{{ asset('images/icones-servicos/siscomex.png') }}" alt=""></div>
                  <h4>Habilitação SISCOMEX</h4>
               </div>
            </div>
            <div class="col-md-3 animate fadeInUp" data-delay="200">
               <div class="text-box text-center">
                  <div class="bordered-thumb"><img src="{{ asset('images/icones-servicos/auditoria-contabil.png') }}" alt=""></div>
                  <h4>Consultoria e Auditoria</h4>
               </div>
            </div>

            <div class="col-md-3 animate fadeInLeft" data-delay="200">
               <div class="text-box text-center">
                  <div class="bordered-thumb"><img src="{{ asset('images/icones-servicos/avaliacao-empresa.png') }}" alt=""></div>
                  <h4>Avaliação de empresas</h4>
               </div>
            </div>
            <div class="col-md-3 animate fadeInLeft" data-delay="200">
               <div class="text-box text-center">
                  <div class="bordered-thumb"><img src="{{ asset('images/icones-servicos/paralegal.png') }}" alt=""></div>
                  <h4>Serviços Societários e Paralalegais</h4>
               </div>
            </div>
            <div class="col-md-3 animate fadeInLeft" data-delay="200">
               <div class="text-box text-center">
                  <div class="bordered-thumb"><img src="{{ asset('images/icones-servicos/planejamento-tributario.png') }}" alt=""></div>
                  <h4>Planejamento Tributário e Gestão Fiscal</h4>
               </div>
            </div>
            <div class="col-md-3 animate fadeInLeft" data-delay="200">
               <div class="text-box text-center">
                  <div class="bordered-thumb"><img src="{{ asset('images/icones-servicos/assessoria-controladoria.png') }}" alt=""></div>
                  <h4>Assessoria e Controladoria Contábil</h4>
               </div>
            </div>
            <div class="col-md-12 animate fadeInRight" data-delay="200">
               <div class="text-box text-center">
                  <div class="bordered-thumb"><img src="{{ asset('images/icones-servicos/contabil-dep-fiscal-pessoal.png') }}" alt=""></div>
                  <h4>Contabilidade, Departamento Fiscal e Pessoal</h4>
               </div>
            </div>
         </div>
      </div>
   </section><!-- / WELCOME -->
@endsection
