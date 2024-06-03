@extends('admin.layouts.app')

@section('title', 'Criar Novo Usuário')

@section('content')
    @include('admin.users.partials.breadcrumb')
    <div class="py-6">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Novo Usuário
        </h2>
    </div>
    {{-- @include('admin.includes.alert') --}}
    <form action="{{ route('users.store') }}" method="POST">
        @include('admin.users.partials.form')
    </form>
@endsection

