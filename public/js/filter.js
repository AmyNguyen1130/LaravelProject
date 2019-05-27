$(document).ready(function (){

    $('#filter_year').change(function () {
        var table = $(location).attr("href").split("/").pop();
        $.ajax({
            'type': 'POST',
            'url': 'manager/tables/'+ table + '/filterYear',
            'data': {
                'filter_year': $('#filter_year').val(),
            },
            'dataType': 'json',
            success: function (data) {
                $('tbody').html(data)
                dataTable(filter_year, table, identifier_field, editable_field)
            },
            error: function () {
                console.log('Có lỗi xảy ra!')
            }
        });
    });

});