
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

const ctx =  document.getElementById('inventoryChartView');

const myDoughnutChart = new Chart(ctx, { 
        type: 'doughnut',
        data: {
            labels: [
                'Cheeseburger',
                'Margherita Pizza',
                'Grilled Chicken Sandwich',
                'Spaghetti Bolognese',
                'Fish and Chips',
                'Tacos'
            ],
            datasets: [{
            labels: [
                    'Cheeseburger',
                    'Margherita Pizza',
                    'Grilled Chicken Sandwich',
                    'Spaghetti Bolognese',
                    'Fish and Chips',
                    'Tacos'
                ],
                data: [300, 50, 100, 150, 30, 60],
                backgroundColor: [
                    'rgba(255, 86, 52, 1)',
                    'rgba(178, 123, 112, 1)',
                    'rgba(96, 84, 186, 1)',
                    'rgba(109, 175, 236, 1)',
                    'rgba(255, 198, 52, 1)',
                    'rgba(22, 191, 214, 1)'
                ],
                hoverOffset: 4
            }]
        },
        options: {
            responsive: true,
            cutout: '64%',
            plugins: {
                legend: {
                    position: 'top',
                    display: false,
                },
                title: {
                    display: false,
                }
            }
        },
    }
);

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