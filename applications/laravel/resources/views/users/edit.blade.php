@extends('layouts/app')

@section('title', 'Edição')

@section('content')
    <h2>Editar o usuário {{$user->name}}</h2>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li> {{$error}} </li>
            @endforeach
        </ul>
    @endif

    <form action="{{route('users.update', $user->id)}}" method="POST">
        @method('PUT')
        @csrf
        <input type="text" name="name" placeholder="Digite seu nome" value="{{$user->name}}" required>
        <input type="email" name="email" placeholder="Digite seu e-mail" value="{{$user->email}}" required>
        <input type="password" name="password" placeholder="Digite sua senha">
        <input type="submit" value="Editar">
    </form>
@endsection
