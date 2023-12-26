@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1>Dashboard</h1>

    <ul class="nav nav-tabs" id="myTabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link {{ $activeTab === 'publics' ? 'active' : '' }}" href="#" onclick="changeTab('publics')">Publics</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $activeTab === 'contests' ? 'active' : '' }}" href="#" onclick="changeTab('contests')">Contests</a>
        </li>
    </ul>

    <div class="tab-content" id="myTabsContent">
        <div class="tab-pane fade {{ $activeTab === 'publics' ? 'show active' : '' }}" id="nav-publics" role="tabpanel" aria-labelledby="nav-publics-tab">
            <!-- Include publics content -->
            @include('publics.index', ['publics' => $publics ?? []])
        </div>
        <div class="tab-pane fade {{ $activeTab === 'contests' ? 'show active' : '' }}" id="nav-contests" role="tabpanel" aria-labelledby="nav-contests-tab">
            <!-- Include contests content -->
            @include('contests.index')
        </div>
    </div>

    <script>
        function changeTab(tab) {
            // Update the active tab variable
            var activeTab = (tab === 'publics') ? 'publics' : 'contests';

            // Update the URL hash to remember the active tab
            window.location.hash = activeTab;

            // Show/hide the corresponding tab content
            $('#myTabs a[href="#nav-' + activeTab + '"]').tab('show');
        }

        document.addEventListener('DOMContentLoaded', function () {
            // Load active tab based on URL hash
            var hash = window.location.hash.substring(1);
            if (hash === 'publics' || hash === 'contests') {
                changeTab(hash);
            }
        });
    </script>
@endsection