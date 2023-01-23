@extends('layouts/app')

@section('title', 'Cadastro')

@section('content')
    <h2>Cadastro</h2>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li> {{$error}} </li>
            @endforeach
        </ul>
    @endif

    <form action="{{route('users.store')}}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Digite seu nome" value="{{old('name')}}" required>
        <input type="email" name="email" placeholder="Digite seu e-mail" value="{{old('email')}}" required>
        <input type="password" name="password" placeholder="Digite sua senha" required>
        <input type="submit" value="Enviar">
    </form>
@endsection
