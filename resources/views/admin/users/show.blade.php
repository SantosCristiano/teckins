@extends('admin.layouts.app')

@section('title', 'Detalhes do Usuário')

@section('content')
    @include('admin.users.partials.breadcrumb')
    <div class="py-6">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Detalhes do Usuário {{ $user->name }}
        </h2>
    </div>

    <ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-200">
        <li><strong>Nome: </strong> {{ $user->name }}</li>
        <li><strong>E-mail: </strong> {{ $user->email }}</li>
    </ul>

    <x-alert/>

    {{-- @can('owner', $user)
        pode deletar
    @endcan --}}

    @can('is-admin')
    <form action="{{ route('users.destroy', $user->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Excluir</button>
    </form>
    @endcan
@endsection

