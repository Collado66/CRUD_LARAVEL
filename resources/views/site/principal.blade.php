@extends('site.layouts.basico')

@section('titulo', 'Home')

@section('conteudo')
    <div class="conteudo-destaque">

        <div class="esquerda">
            <div class="informacoes">
                <h1>Etec</h1>
                <p>Programação web 3.<p>
                <div class="chamada">
                    <img src="{{ asset('img/check.png') }}">
                    <span class="texto-branco">Site em laravel</span>
                </div>
                <div class="chamada">
                    <img src="{{ asset('img/check.png') }}">
                    <span class="texto-branco">CRUD em laravel</span>
                </div>
            </div>

            <div class="video">
                <img src="{{ asset('img/player_video.jpg') }}">
            </div>
        </div>

        <div class="direita">
            <div class="contato">
                <h1>Contato</h1>
                <p>Digite o formulário abaixo.<p>
                @component('site.layouts._components.form_contato', ['classe' => 'borda-branca', 'motivo_contatos' => $motivo_contatos])
                @endcomponent
            </div>
        </div>
    </div>
@endsection
