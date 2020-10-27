@extends('welcome')

@section('content')

    @if (\Session::has('msg'))
        <div class="alert alert-info" role="alert">
            {!! \Session::get('msg') !!}
        </div>
    @endif

    <h1>BlueGhost </h1>
    <a href="{{ route('create') }}" class="btn btn-success">Vytvořit uživatele</a>
    <table class="rwd-table">
        <thead>
            <tr>
                <th>Celé jméno</th>
                <th>Email</th>
                <th>Telefonní číslo</th>
                <th>Dlouhá poznámka</th>
                <th>Slug</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->fullName }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td class="description">{{ $user->note }}</td>
                <td>{{ $user->slug }}</td>
                <td><a href="{{ route('edit', $user->slug) }}" class="btn btn-info">Upravit</a></td>
                <td><a href="{{ route('delete', $user->id) }}" class="btn btn-danger">x</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
