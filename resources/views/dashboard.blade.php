@extends('layouts.header')
@extends('components.topheader')
@extends('components.sidebar')

@section('styles')
<link rel="stylesheet" href="{{URL::asset('assets/ui/bms/vendors/virtual-select/virtual-select.min.css')}}">
@endsection

@section('content')
<main class="main-section-area">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
        <h1 class="pg-title">Dashboard</h1>
        <div class="form-item">
            <input type="text" name="calendar" class="dash-calendar" placeholder="22 May 2024">
            <!-- <label class="form-label" for="">Today</label> -->
        </div>
    </div>
    

</main>
@endsection

@section('dashboard-scripts')
<script src="{{URL::asset('assets/ui/bms/vendors/virtual-select/virtual-select.min.js')}}"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script src="{{URL::asset('assets/ui/bms/js/dashboard.js')}}"></script>
@endsection