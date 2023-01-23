@extends('layouts/app')

@section('title', 'Detalhes')

@section('content')
    <h2>Usuário</h2>

    <ul>
        <li>Nome: {{$user->name}}</li>
        <li>Email: {{$user->email}}</li>
        <li>Data de Cadastro: {{$user->created_at}}</li>
    </ul>

    <form action="{{route('users.delete', $user->id)}}" method="POST">
        @method('DELETE')
        @csrf
        <input type="submit" value="Excluir">
    </form>
@endsection


