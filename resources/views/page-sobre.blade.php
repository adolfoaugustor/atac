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
        <a href="mailto:atac-assessoria@uol.com.br" class="btn btn-primary get-in-touch" data-text="Contate-nos">
            <i class="icon-envelope"></i>Contate-nos
        </a>
    </div>
</section>

@section('conteudo')
   <!-- COMPANY OVERVIEW -->
   <section>
      <div class="container">
         <div class="row justified-content">
            <div class="col-md-6 animate fadeInLeft">
               <h2><b>{{ $page->title }}</b></h2>
               <div class="height-10"></div>
               <p>{!! $page->body !!}</p>
            </div>
            <div class="col-md-6 animate fadeInRight">
                <div class="image-widget">
                    @if ($page->image)
                        <img src="{{ asset('storage/' . $page->image ) }}" style="width:100%" class="img-shadow" alt="">
                    @endif
                </div>
            </div>
         </div>
         <div class="row justified-content">
            <div class="col-md-12" style="margin-top: 3%">
                <ul class="company-history">
                    <li class="clearfix animate fadeInLeft">
                        <div class="history-content">
                            <h4><b>VISÃO</b></h4>
                            <p>Ser reconhecido pela experiência dos serviços prestados, sempre utilizando ferramentas de alta performace, agregando valor aos nossos clientes e aos nossos profissionais, criando assim relacionamentos produtivos e duradouros.</p>
                        </div>
                    </li>
                    <li class="clearfix animate fadeInLeft" data-delay="100">
                        <div class="history-content">
                            <h4><b>MISSÃO</b></h4>
                            <p>Oferece as instituições públicas ou privadas, serviços em contabilidade e apoio administrativo de forma personalizada que superem as expectativas e contribuam para a otimização da gestão dos clientes, gerando resultados extraordinários.</p>
                        </div>
                    </li>
                    <li class="clearfix animate fadeInLeft" data-delay="200">
                        <div class="history-content">
                            <h4><b>VALORES</b></h4>
                            <p>
                                <br>- Ética
                                <br>- Transparência
                                <br>- Compromentimento
                                <br>- Profissionalismo
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
         </div>
      </div>
   </section><!-- / COMPANY OVERVIEW -->
@endsection
