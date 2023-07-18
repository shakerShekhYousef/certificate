(function ($) {
    "use strict";
    let table = $('#datatable').DataTable({
        serverSide: true,
        scrollY: 500,
        scrollX: true,
        scrollCollapse: true,
        processing: true,
        // "searching": false,
        "ordering": false,
        pageLength: 10,
        ajax:{
            url:$('#table-url').data("url"),
            data:function (d){
                d.role_id = $('#role_id').val()
                d.search = $('input[type="search"]').val()


            }
        },
        order:[0,'asc'],
        autoWidth: false,
        language: {
            paginate: {
                next: 'Next &#8250;',
                previous: '&#8249; Previous'
            }
        },
        columns: [
            {"data": 'checkbox', "name": 'checkbox', "orderable": false, "searchable": false},
            {"data": "role",'name':'role.name'},
            {"data": "name","name": 'name'},
            {"data": "email",'name':'email'},
            {"data": "phone_number",'name':'phone_number'},
            {"data": "image",'name':'image'},
            {"data": "action",'name':'action'}
        ]
    });
    $('.filter-select').change(function(){
        table.draw();
    });
})(jQuery)

