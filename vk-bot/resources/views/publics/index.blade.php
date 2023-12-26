@extends('layouts.app')

@section('title', 'Publics')

@section('content')
    <h1>Publics</h1>
    <a href="{{ route('publics.create') }}" class="btn btn-primary mb-3">Add Public</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>VK ID</th>
                <th>Name</th>
                <th>Token</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Вывод данных из базы пабликов -->
        </tbody>
    </table>
@endsection
