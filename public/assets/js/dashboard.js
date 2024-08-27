 google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    google.charts.setOnLoadCallback(drawChartOne);
    google.charts.setOnLoadCallback(drawChartTwo);
    function drawChart() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Month');
      data.addColumn('number', 'Orders');
      data.addColumn('number', 'Clients');

      data.addRows([
        ['09:00', 100, 200],
        ['09:00', 120, 210],
        ['09:00', 130, 230],
        ['09:00', 140, 240],
        ['09:00', 150, 250],
        ['09:00', 160, 260],
        ['09:00', 170, 270],
        ['09:00', 180, 280],
        ['09:00', 190, 290],
        ['09:00', 120, 50],
        ['09:00', 210, 310],
        ['09:00', 220, 320],
        ['09:00', 220, 320],
        ['09:00', 220, 320],
        ['09:00', 220, 320],
        ['09:00', 220, 320]
      ]);
      var options = {
        title: '',
        backgroundColor: 'transparent',
        chartArea: {width: '100%'},
        colors: ['#FF5634', '#fff'],
        hAxis: {
          title: '',
          gridlines: { color: 'transparent' },
          baselineColor: 'transparent'
        },
        vAxis: {
          title: '',
          gridlines: { color: 'transparent' },
          textPosition: 'none'
        },
        legend: { position: 'bottom', maxLines: 3 },
        bar: { groupWidth: '16px' },
        isStacked: true
      };
      var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }

    function drawChartOne() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Month');
      data.addColumn('number', 'Item with Stock');
      data.addColumn('number', 'Made in House');

      data.addRows([
        ['09:00', 0, 200],
        ['09:00', 0, 300],
        ['09:00', 0, 400],
        ['09:00', 0, 360],
        ['09:00', 0, 450],
        ['09:00', 0, 380],
        ['09:00', 170, 270],
        ['09:00', 180, 280],
        ['09:00', 190, 290],
        ['09:00', 120, 50],
        ['09:00', 210, 310],
        ['09:00', 0, 380],
        ['09:00', 220, 320],
        ['09:00', 0, 320],
        ['09:00', 220, 320],
        ['09:00', 0, 450],
        ['09:00', 220, 320],
        ['09:00', 220, 320],
        ['09:00', 0, 450],
        ['09:00', 0, 380]
      ]);
      var options = {
        title: '',
        backgroundColor: 'transparent',
        chartArea: {width: '100%'},
        colors: ['#FF5634', '#fff'],
        hAxis: {
          title: '',
          gridlines: { color: 'transparent' },
          baselineColor: 'transparent'
        },
        vAxis: {
          title: '',
          gridlines: { color: 'transparent' },
          textPosition: 'none'
        },
        legend: { position: 'bottom', maxLines: 3 },
        bar: { groupWidth: '16px' },
        isStacked: true
      };
      var chart1 = new google.visualization.ColumnChart(document.getElementById('chart_div_one'));
      chart1.draw(data, options);
    }

    function drawChartTwo() {
      var data = google.visualization.arrayToDataTable([
        ['House', 'Stock'],
        ['Made in House', 6794],
        ['Item with Stock', 3226]
      ]);

      var pieOptions = {
        title: '',
        backgroundColor: 'transparent',
        chartArea: {width: '100%'},
        pieHole: 0.7,
        pieSliceText: 'none',
        colors: ['#fff', '#FF5634'],
        legend: { position: 'bottom', maxLines: 1 }
      };

      var pieChart = new google.visualization.PieChart(document.getElementById('pie_chart'));
      pieChart.draw(data, pieOptions);

     
    }
    

function animateProgressBars() {
  const progressValues = [100, 87, 70, 59, 56, 51];
  const progressBars = document.querySelectorAll('.progress');
  progressBars.forEach((progress, index) => {
    progress.style.width = `${progressValues[index]}%`;
  });
}
window.onload = function() {
  animateProgressBars();
};

    $('.filter-select').each(function() {
        $(this).select2({
            dropdownParent: $(this).parent(),
        });
    })
$(document).ready(function() {
$('input[name="calendar"]').daterangepicker({
    locale: {
            daysOfWeek: ['S', 'M', 'T', 'W', 'T', 'F', 'S']
        },

    ranges: {
        'Custom': [moment(), moment()],
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        'Last 28 Days': [moment().subtract(27, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'Last 90 Days': [moment().subtract(89, 'days'), moment()],
        'Last 12 Months': [moment().subtract(364, 'days'), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    },
    "showCustomRangeLabel": false,
    "alwaysShowCalendars": true,
    "parentEl": "custom-date-range-picker",
    "startDate": "06/14/2024",
    "endDate": "06/20/2024",
    "opens": "left",
    "buttonClasses": "btn",
    "applyButtonClasses": "date-apply-btn",
    "cancelClass": "date-cancel-btn"
}, 
function(start, end, label) {
  console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
});

function swapElements(elm1, elm2) {
        var temp = $('<div>');
        elm1.before(temp);
        elm2.before(elm1);
        temp.before(elm2);
        temp.remove();
    }

    $(".daterangepicker").addClass("custom-date-range-picker");
    var leftCalendar = $('.drp-calendar.left');
    var rightCalendar = $('.drp-calendar.right');
    var parentDiv = $('<div>').attr('class', 'parent-calendar');
    parentDiv.append(leftCalendar);
    parentDiv.append(rightCalendar);
    $('.daterangepicker').append(parentDiv);
    var top = $('.parent-calendar');
    var bottom = $('.drp-buttons');
        swapElements(top, bottom);
});


    VirtualSelect.init({
      ele: '#payment-filter',
      maxWidth: '240px',
      multiple: true,
      search: false,
      searchGroup: false, 
      searchByStartsWith: false,
    });
    VirtualSelect.init({
      ele: '#status-filter',
      maxWidth: '240px',
      multiple: true,
      search: true,
      searchGroup: false, 
    });