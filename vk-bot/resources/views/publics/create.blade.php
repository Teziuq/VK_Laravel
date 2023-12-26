@extends('layouts.app')

@section('title', 'Create Public')

@section('content')
    <h1>Create Public</h1>

    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('publics.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="vk_id" class="form-label">VK ID</label>
            <input type="text" id="vk_id" name="vk_id" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="token" class="form-label">Token</label>
            <input type="text" id="token" name="token" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Public</button>
    </form>
@endsection
