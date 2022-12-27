@extends('layouts.app')

@section('title', "Novo Comentario para o usuario {$user->name}")

@section('content')
    
<h1 class="text-2xl font-semibold leading-tigh py-2">
    Novo Comentario para o usuario {{ $user->name }}
</h1>

@include('includes.validations-form')

<form
    action="{{ route("comments.store", $user->id) }}"
    method="POST"
>
    @include('users.comments._partials.form')
</form>

@endsection

