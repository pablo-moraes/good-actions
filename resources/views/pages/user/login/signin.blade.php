@extends('template.app')
<link rel="stylesheet" href={{asset('css/login.css')}}>
@section('title', 'Faça seu Login')

@section('content')
    <div class="all">
        <section class="left">
            <img src="{{'img/undraw_collab.svg'}}" alt="A imagem contém ilustração de pessoas interagindo.">
        </section>
        <section class="login-side">
            <h2>Faça seu Logon</h2>
            <form action="{{ route('login') }}" class="form-login" method="post">
                @csrf
                <input type="text" placeholder="Digite seu Usuário ou Email" required>
                <input type="password" placeholder="Digite sua Senha" required>
                <button type="submit">Entrar</button>
            </form>
            <div class="register">
                <a href="{{route('register')}}"><i data-feather="log-in" class="feather"> </i> Não tenho cadastro</a>
                <a href="{{route('recover')}}">Esqueceu a senha?</a>
            </div>
        </section>
    </div>
@endsection