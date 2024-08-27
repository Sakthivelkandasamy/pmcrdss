@extends('layouts.header')
@extends('components.topheader')
@extends('components.sidebar')

@section('styles')
    <script src="https://d3js.org/d3.v7.min.js"></script>
@endsection

@section('content')
<main class="main-section-area">
    <div class="main-container" id="mainWindow" page-id="window101">
       
    <div id="canvas">
        <!-- Nodes will be dynamically added here by JavaScript -->
    </div>

</div>
  
  <style>
    .workflow-node {
        padding: 5px;
        border: 2px solid #000000;
        background-color: #ffffff;
        position: absolute;
        width: 150px;
        height: 40px;
        text-align: center;
        font-size: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Arial', sans-serif;
    }

    #canvas {
        position: relative;
        width: 1000px;
        height: 650px;
        background-color: #ffffff;
        overflow: auto;
        margin: 20px auto;
        border: 1px solid #cccccc;
    }

    .jtk-connector {
        z-index: 4;
    }

    .jtk-endpoint {
        z-index: 5;
    }

    .workflow-node {
        z-index: 6;
    }

    .chart-label {
        position: absolute;
        font-family: 'Arial', sans-serif;
        font-size: 14px;
        font-weight: bold;
    }
</style>
    
</main>

@endsection

@section('dashboard-scripts')
 @vite(['resources/js/workflow-chart.js'])
   
@endsection
