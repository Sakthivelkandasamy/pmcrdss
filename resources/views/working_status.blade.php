@extends('layouts.header')
@extends('components.topheader')
@extends('components.sidebar')

@section('content')

<main class="main-section-area">
    <div class="main-container" id="mainWindow" page-id="window101">
        <div id="app">
            <multi-series-column-chart></multi-series-column-chart>
        </div>

    </div>
</main>
@endsection

@section('dashboard-scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jsPlumb/2.15.6/js/jsplumb.min.js"></script>


@endsection