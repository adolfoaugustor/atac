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
        <a href="mailto:atac-assessoria@uol.com.br" class="btn btn-primary get-in-touch" data-text="Contate-nos">
            <i class="icon-envelope"></i>Contate-nos
        </a>
    </div>
</section>

@section('conteudo')
    <!-- CASES CONTENT -->
    @isset($clients)
    <section>
        <div class="container">
            <div class="row">
                <ul id="cases-container" class="cases-container">
                    @foreach($clients as $key => $client)
                    <div class="col-md-4">
                        <li class="entry business-services">
                            <div class="cases-item animate fadeInUp"
                                @if($key === 0) @else data-delay="{{ $key === 1 ? 100 : 200 }}" @endif>

                                @if(isset($client->link_client))
                                    <a href="{{ $client->link_client }}" target="_blank" rel="{{ $client->name }}" class="page-links">
                                @else
                                    <a href="#" class="page-links">
                                @endif
                                    <figure>
                                        <img src="{{ asset('storage/' . $client->image_client ) }}" alt="">
                                        <figcaption>
                                            <div>
                                                <small>{{ $client->name }}</small>
                                                {{ $client->description }}
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                        </li>
                    </div>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
   <!-- / CASES CONTENT -->
   @endisset
@endsection
