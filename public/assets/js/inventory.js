// Select DropDown
$('.form-select').each(function() {
    $(this).select2({
        dropdownParent: $(this).parent(),
    });
});
$('.form-select-multiple').each(function() {
    $(this).select2({
        dropdownParent: $(this).parent(),
        placeholder: {
          id: -1,
          text: $(this).data('placeholder'),
        }
    });
});

// Upload File Input

$('.file-upload-input').each(function(){
    $(this).on('change', function(e){
        console.log(e.target.value);
        if(e.target.value){
            let targetEle = e.target;
            let uploadFileEle = $(this).siblings('.file-upload').find('.input-file');
            let closeEle = $(this).siblings('.file-upload').find('.empty-file');

            if (!uploadFileEle.hasClass('active')) {
                uploadFileEle.addClass('active');
            }

            closeEle.on('click', function(){
                targetEle.value = '';
                uploadFileEle.removeClass('active');
            })
        }
    })
})

$('.form-select').on('select2:open', function() {
    $('input.select2-search__field').attr('placeholder', 'Search...');
});

$('.select-btn-wrapper select').on('change',function(e){
    if(e.target.value == 'addnew'){
        let id = $(this).attr('id');
        let modalID = '#' + id + 'Modal';
        $(modalID).modal('show');
        e.target.value = '';
    }
})

// To open the extended window
$('#addWindow').on('click', function(e){
    $('#mainWindow').hide();
    
    let pgId = $(this).attr('page-id');
    let selector = '#' + pgId;
    $(selector).show();
})

$('#backBtn').on('click', function(e){
    $(this).closest('.main-container').hide();
    $('#mainWindow').show();
})


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