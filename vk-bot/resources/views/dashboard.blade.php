@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1>Dashboard</h1>

    <ul class="nav nav-tabs" id="myTabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link {{ $activeTab === 'contests' ? 'active' : '' }}" id="nav-contests-tab" data-toggle="tab" href="#nav-contests" role="tab">Contests</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $activeTab === 'publics' ? 'active' : '' }}" id="nav-publics-tab" data-toggle="tab" href="#nav-publics" role="tab">Publics</a>
        </li>
    </ul>

    <div class="tab-content" id="myTabsContent">
        <div class="tab-pane fade {{ $activeTab === 'contests' ? 'show active' : '' }}" id="nav-contests" role="tabpanel" aria-labelledby="nav-contests-tab">
            <!-- Include contests content -->
            @include('contests.index')
        </div>
        <div class="tab-pane fade {{ $activeTab === 'publics' ? 'show active' : '' }}" id="nav-publics" role="tabpanel" aria-labelledby="nav-publics-tab">
            <!-- Include publics content -->
            @include('publics.index', ['publics' => $publics ?? []])
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize Bootstrap tabs
            var myTabs = new bootstrap.Tab(document.getElementById('{{ $activeTab === 'contests' ? 'nav-contests-tab' : 'nav-publics-tab' }}'));
            myTabs.show();

            // Handle tab switch
            $('#myTabs a').on('shown.bs.tab', function (e) {
                var targetTab = e.target.getAttribute('href');
                window.location.hash = targetTab;
            });

            // Load active tab based on URL hash
            var hash = window.location.hash;
            if (hash) {
                $(`#myTabs a[href="${hash}"]`).tab('show');
            }
        });
    </script>
@endsection
