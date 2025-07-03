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
         <div class="row">
            <div class="col-md-6 animate fadeInLeft">
               <h2>{{ $page->title }}</h2>
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
         {{-- <div class="row">
            <div class="col-md-12" style="margin-top: 3%">
                <ul class="company-history">
                    <li class="clearfix animate fadeInLeft">
                        <div class="history-content">
                            <h4>VISÃO</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout The point of using Lorem Ipsum.</p>
                        </div>
                    </li>
                    <li class="clearfix animate fadeInLeft" data-delay="100">
                        <div class="history-content">
                            <h4>MISSÃO</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout The point of using Lorem Ipsum.</p>
                        </div>
                    </li>
                    <li class="clearfix animate fadeInLeft" data-delay="200">
                        <div class="history-content">
                            <h4>VALORES</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Curabitur metus ipsum. But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.</p>
                        </div>
                    </li>
                </ul>
            </div>
         </div> --}}
      </div>
   </section><!-- / COMPANY OVERVIEW -->
@endsection
