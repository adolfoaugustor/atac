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
    <section class="links" style="padding: 50px 0;">
        <div class="container">
            <div class="heading text-center animate bounceIn">
                <h2>
                    @if ($page->body != null)
                        {!! $page->title !!}
                    @endif
                </h2>
            </div>

            @if ($page->body != null)
                <div class="height-50"></div>
                <div class="row text-center">
                    {!! $page->body !!}
                </div>
            @endif

            <div class="height-50"></div>

            <div class="row text-center">
                @foreach ($links as $key => $links)
                    <div class="col-md-6">
                        <a href="{{ $links->url }}" target="_blank" rel="{{ $links->title }}" class="page-links">
                            <div class="text-box text-center">
                                <div class="bordered-thumb">
                                    @if ($links->image_link)
                                        <img src="{{ Voyager::image( $links->image_link ) }}" alt="">
                                    @endif
                                </div>
                                <p style="font-size: 16px;">{{ $links->title }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- / WELCOME -->
@endsection
