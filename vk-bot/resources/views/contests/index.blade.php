@extends('layouts.app')

@section('title', 'Contests')

@section('content')
    <h1>Contests</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Text</th>
                <th>Draw Time</th>
                <th>Public ID</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Вывод данных из базы конкурсов -->
        </tbody>
    </table>
@endsection
