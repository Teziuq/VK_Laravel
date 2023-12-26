@extends('layouts.app')

@section('title', 'Create Contest')

@section('content')
    <h1>Create Contest</h1>

    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('contests.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" id="image" name="image" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Text</label>
            <textarea id="text" name="text" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="draw_time" class="form-label">Draw Time</label>
            <input type="datetime-local" id="draw_time" name="draw_time" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="public_id" class="form-label">Public ID</label>
            <input type="text" id="public_id" name="public_id" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Contest</button>
    </form>
@endsection
