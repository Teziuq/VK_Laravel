@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1>Dashboard</h1>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-contests-tab" data-toggle="tab" href="#nav-contests" role="tab" aria-controls="nav-contests" aria-selected="true">Contests</a>
        <a class="nav-item nav-link" id="nav-publics-tab" data-toggle="tab" href="#nav-publics" role="tab" aria-controls="nav-publics" aria-selected="false">Publics</a>
    </div>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-contests" role="tabpanel" aria-labelledby="nav-contests-tab">
            <!-- Вставьте код для вкладки Contests -->
            @include('contests.index')
        </div>
        <div class="tab-pane fade" id="nav-publics" role="tabpanel" aria-labelledby="nav-publics-tab">
            <!-- Вставьте код для вкладки Publics -->
            @include('publics.index')
        </div>
    </div>
@endsection
