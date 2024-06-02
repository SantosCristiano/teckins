@extends('admin.layouts.app')

@section('title', 'Detalhes do Usuário')

@section('content')
    <h1>Detalhes do Usuário</h1>

    <ul>
        <li><strong>Nome: </strong> {{ $user->name }}</li>
        <li><strong>E-mail: </strong> {{ $user->email }}</li>
    </ul>

    <x-alert/>

    <form action="{{ route('users.destroy', $user->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Excluir</button>
    </form>
@endsection

