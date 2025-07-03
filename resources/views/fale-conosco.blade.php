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
        <a href="mailto:atac-assessoria@uol.com.br" class="btn btn-primary get-in-touch" data-text="Contate-nos">
            <i class="icon-envelope"></i>Contate-nos
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
                            <img src="{{ asset('storage/' . $page->image ) }}" class="quries-img img-responsive" alt="{{ $page->title }}">
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
                                <p class="success" id="success">
                                {{Session::get('success')}}
                                </p>
                            </div>
                        @endif

                        @if(Session::has('error'))
                            <div class="alert alert-danger">
                                <p class="error" id="error">
                                {{Session::get('error')}}
                                </p>
                            </div>
                        @endif

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <p class="error" id="error">
                                Campo(s) Obrigatório: <br>
                                @foreach ($errors->all() as $error)
                                    {{ $error }}<br>
                                @endforeach
                            </p>
                        </div>
                        @endif

                        <h3>Preencha os campos:</h3><br>
                        <form class="contact-form" id="contact_form" method="POST" action="{{ route('contact.store') }}" data-grecaptcha-action="message">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="nome">Nome Completo</label>
                                    <input type="text" data-delay="300" required placeholder="Nome Completo" name="nome" id="contact_name" class="input" value="{{ old('nome') }}" maxlength="100">
                                    @if ($errors->has('nome'))
                                        <span class="text-danger">{{ $errors->first('nome') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="celular">Telefone</label>
                                    <input type="text" data-delay="300" required placeholder="85 9 9999-9999" name="celular" id="contact_phone" class="input" value="{{ old('celular') }}" maxlength="20">
                                    @if ($errors->has('celular'))
                                        <span class="text-danger">{{ $errors->first('celular') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="email">E-mail</label>
                                    <input type="email" data-delay="300" required placeholder="E-mail" name="email" id="contact_email" class="input" value="{{ old('email') }}" maxlength="100">
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="assunto">Assunto</label>
                                    <input type="text" data-delay="300" name="assunto" id="contact_subject" class="input" value="{{ old('assunto') }}" maxlength="100">
                                </div>
                            </div>
                            <label for="mensagem">Mensagem:</label>
                            <textarea data-delay="500" class="required valid" required placeholder="Informações: " name="mensagem" id="message" maxlength="2000">{{ old('mensagem') }}</textarea>
                            @if ($errors->has('mensagem'))
                                <span class="text-danger">{{ $errors->first('mensagem') }}</span>
                            @endif

                            <!-- Campo honeypot (invisível para usuários reais) -->
                            <div style="display:none">
                                <label for="website">Website</label>
                                <input type="text" name="website" id="website" value="">
                            </div>
                            <div class="g-recaptcha mt-4" data-sitekey="{{config('services.recaptcha.site_key')}}"></div>
                           <button class="btn btn-primary" name="submit" type="submit" data-text="Enviar" id="submit_btn">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- / COMPANY OVERVIEW -->
    <div class="map" id="map">
        <iframe
            width="100%"
            height="450"
            style="border:0"
            loading="lazy"
            allowfullscreen
            referrerpolicy="no-referrer-when-downgrade"
            src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJUaP0b5ZOxwcRY7gJfKarnkY&key=AIzaSyCA7XVaXUSfnFumdAnjgSu9TXRz1x5pQF0">
        </iframe>
    </div>

    @section('scripts-extras')

    @endsection
@endsection
