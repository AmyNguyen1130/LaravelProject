$(document).ready(function () {

    $('#role').change(function () {
        $.ajax({
            'type': 'POST',
            'url': 'admin/tables/users/role',
            'data': {
                'role': $('#role').val(),
            },
            'dataType': 'json',
            success: function (data) {
                $('tbody').html(data)
                dataTable(role, table, identifier_field, editable_field)
            },
            error: function () {
                console.log('Có lỗi xảy ra!')
            }
        });
    });

});