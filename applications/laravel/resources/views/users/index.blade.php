@extends('layouts/app')

@section('title', 'Lista')

@section('content')
    <h2>Lista de Usuários</h2>

    <a href="{{route('users.create')}}">Adicionar um novo usuário</a>

    <br><br>

    <form action="{{route('users.index')}}" method="GET">
        <input type="text" name='search' placeholder="Pesquisar usuários">
        <input type="submit" value="Pesquisar">
    </form>

    <ul>
        @foreach($users as $user)
            <li>
                {{$user->name}} |
                <a href="{{route('users.show', $user->id)}}">Ver Mais</a> |
                <a href="{{route('users.edit', $user->id)}}">Editar</a>
            </li>
        @endforeach
    </ul>
@endsection


