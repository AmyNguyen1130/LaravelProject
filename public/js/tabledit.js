
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(window).load(function () {
    var table = $(location).attr("href").split("/").pop();

    // THIS ONE MAYBE CHANGE IF UPLOAD CODE ON HOSTING
    var role = $(location).attr("href").split("/")[4];
    // 

    var identifier_field;
    var editable_field;
    console.log('role ' + role);
    console.log('table ' + table);
    if (table == 'electrics') {
        identifier_field = [0, 'id'];
        editable_field = [
            [3, 'old_number'],
            [4, 'new_number'],
            [5, 'price'],
            [6, 'status', '{"0": "Chưa nộp", "1": "Đã nộp"}'],
            [7, 'deleted', '{"0": "False", "1": "True"}'],
        ];
        loadDataTable(role, table, identifier_field, editable_field)
    } else if (table == 'users') {
        identifier_field = [0, 'id'];
        editable_field = [
            [1, 'full_name'],
            [2, 'email'],
            [3, 'gender', '{"Nam" : "Nam", "Nu" : "Nu"}'],
            [4, 'phone'],
            [5, 'role', '{"educator": "Educator", "student": "Student", "manager": "Manager", "admin": "Admin"}'],
            [6, 'deleted', '{"0": "Alive", "1": "Died"}'],
        ];
        loadDataTable(role, table, identifier_field, editable_field)
    }

});

function loadDataTable(role, table, identifier_field, editable_field) {
    console.log('loading table ' + table)
    $.ajax({
        url: role + '/tables/' + table + '/load',
        method: 'GET'
    }).done(function (data) {
        console.log('table ' + table + ' loaded')
        $('tbody').html(data)
        tableData(role, table, identifier_field, editable_field)
        console.clear()
    })
}

function tableData(role, table, identifier_field, editable_field) {
    $('#table_' + table).Tabledit({
        url: role + '/tables/' + table + '/CRUD',
        eventType: 'dblclick',
        editButton: true,
        deleteButton: true,
        hideIdentifier: false,
        buttons: {
            edit: {
                class: 'btn btn-sm btn-default',
                html: '<span class="glyphicon glyphicon-pencil"></span>',
                action: 'edit'
            },
            delete: {
                class: 'btn btn-sm btn-default',
                html: '<span class="glyphicon glyphicon-trash"></span>',
                action: 'delete'
            },
            save: {
                class: 'btn btn-sm btn-success',
                html: 'Save'
            },
            restore: {
                class: 'btn btn-sm btn-warning',
                html: 'Restore',
                action: 'restore'
            },
            confirm: {
                class: 'btn btn-sm btn-default',
                html: 'Confirm'
            }
        },
        columns: {
            identifier: identifier_field,
            editable: editable_field
        },
        onSuccess: function (data, textStatus, jqXHR) {
            loadDataTable(role, table, identifier_field, editable_field)
        },
        onFail: function (jqXHR, textStatus, errorThrown) {
            console.log('onFail(jqXHR, textStatus, errorThrown)');
            console.log(jqXHR);
            console.log(textStatus);
            console.log(errorThrown);
        },
        onAjax: function (action, serialize) {
            console.log('onAjax(action, serialize)');
            console.log(action);
            console.log(serialize);
        }
    });
}