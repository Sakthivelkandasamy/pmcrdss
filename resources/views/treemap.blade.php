@extends('layouts.header')
@extends('components.topheader')
@extends('components.sidebar')

@section('content')
 
<main class="main-section-area">
    <div class="main-container" id="mainWindow" page-id="window101">
         <div id="treemap"></div>

    </div>
</main>
@endsection

@section('dashboard-scripts')
<script src="https://d3js.org/d3.v5.min.js"></script>
  <script>
        var data = {
            "name": "Root",
            "children": [
                {"name": "Child 1", "value": 100},
                {"name": "Child 2", "value": 300},
                {"name": "Child 3", "value": 200}
            ]
        };

        var width = 960;
        var height = 500;

        var root = d3.hierarchy(data)
            .sum(function(d) { return d.value; });

        d3.treemap()
            .size([width, height])
            .padding(1)
            (root);

        var svg = d3.select("#treemap")
            .append("svg")
            .attr("width", width)
            .attr("height", height);

        var nodes = svg.selectAll("g")
            .data(root.leaves())
            .enter().append("g")
            .attr("transform", function(d) {
                return "translate(" + d.x0 + "," + d.y0 + ")";
            });

        nodes.append("rect")
            .attr("width", function(d) { return d.x1 - d.x0; })
            .attr("height", function(d) { return d.y1 - d.y0; })
            .style("fill", function(d) { return '#'+Math.floor(Math.random()*16777215).toString(16); });

        nodes.append("text")
            .attr("dx", 4)
            .attr("dy", 14)
            .text(function(d) { return d.data.name; });
    </script>

@endsection