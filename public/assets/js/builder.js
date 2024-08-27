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