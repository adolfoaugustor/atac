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
        <a href="mailto:atac-assessoria@uol.com.br" class="btn btn-primary get-in-touch" data-text="Contate-nos">
            <i class="icon-envelope"></i>Contate-nos
        </a>
    </div>
</section>

@section('conteudo')
<style>
    .category-title {
    font-size: 32px; /* Tamanho da fonte para o título da categoria */
    font-weight: 700; /* Negrito para destacar */
    color: #333; /* Cor do texto */
    margin-bottom: 20px; /* Espaçamento abaixo do título */
    padding-bottom: 10px; /* Um pequeno preenchimento na parte inferior */
    border-bottom: 2px solid #ddd; /* Uma linha de separação sutil abaixo do título */
    display: inline-block; /* Para a borda cobrir apenas o texto do título */
    line-height: 1.2; /* Ajusta a altura da linha */
    text-transform: uppercase; /* Opcional: para deixar o título em maiúsculas */
    letter-spacing: 1px; /* Opcional: espaçamento entre letras */
}

/* Ajuste de margem superior para a primeira categoria (opcional, se ficar muito colado) */
.category-section:first-of-type .category-title {
    margin-top: 20px; /* Adiciona uma margem superior para a primeira categoria, se necessário */
}
</style>
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

            @foreach ($categorias as $category)
                <div class="col-md-12">
                    <h2 class="text-body-emphasis">{{ $category->name }}</h2>
                        <ul class="list-unstyled ps-0">
                            <div class="height-30"></div>
                            @php
                                $filteredLinks = $links->where('category', $category->slug);
                            @endphp

                            @if ($filteredLinks->isNotEmpty())
                                @foreach ($filteredLinks as $link_item)
                                    <li>
                                        <a class="icon-link mb-1" href="{{ $link_item->url }}" rel="{{ $link_item->title }}" target="_blank">
                                            <svg class="bi" width="16" height="16" aria-hidden="true">
                                                <use xlink:href="#arrow-right-circle"></use>
                                            </svg>
                                            {{ $link_item->title }}
                                        </a>
                                    </li>
                                @endforeach

                            @else
                                <p class="text-center text-muted">Nenhum link disponível para esta categoria no momento.</p>
                            @endif
                        </ul>
                    <div class="height-50"></div> {{-- Espaçamento entre as seções de categorias --}}
                </div>
            @endforeach
        </div>
    </section><!-- / WELCOME -->
@endsection

@section('scripts-extras')
<script>
    function limitarPalavrasFrontend(texto, limite) {
        texto = texto.trim();

        let palavras = texto.split(/\s+/);

        if (palavras.length > limite) {
            let textoLimitado = palavras.slice(0, limite).join(' ');
            return textoLimitado + '...';
        }

        return texto;
    }

    document.addEventListener('DOMContentLoaded', function() {
        const titulosLinks = document.querySelectorAll('.page-links .text-box p');
        const limiteDesejadoDePalavras = 4;
        titulosLinks.forEach(function(paragrafo) {
            paragrafo.textContent = limitarPalavrasFrontend(paragrafo.textContent, limiteDesejadoDePalavras);
        });
    });
</script>
@endsection
