<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
@extends('layouts/app')

@section('title', 'Lista')

@section('content')
    <h2>Lista de Usuários</h2>
    <ul>
        @foreach($users as $user)
            <li>
                {{$user->name}} |
                <a href="{{route('users.show', $user->id)}}">Ver Mais</a>
            </li>
        @endforeach
    </ul>
@endsection


