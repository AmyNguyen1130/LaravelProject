
// LẤY DỮ LIỆU ĐỂ DÙNG CHO TABLEDIT
var table = $(location).attr("href").split("/").pop();

// THIS ONE MAYBE CHANGE IF UPLOAD CODE ON HOSTING
var role = $(location).attr("href").split("/")[4];
// 

var identifier_field;
var editable_field;
console.log('role ' + role);
console.log('table ' + table);
if (table == 'electrics' || table == 'waters') {
    identifier_field = [0, 'id'];
    editable_field = [
        [3, 'old_number'],
        [4, 'new_number'],
        [5, 'price'],
        [6, 'status', '{"0": "Chưa nộp", "1": "Đã nộp"}'],
        [7, 'deleted', '{"0": "False", "1": "True"}'],
    ];
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
} else if (table == 'misconducts') {
    identifier_field = [0, 'id'];
    editable_field = [
        [2, 'content'],
        [3, 'time'],
        [4, 'minus'],
        [5, 'deleted', '{"0": "false", "1": "true"}'],
    ];
} else if (table == 'students') {
    identifier_field = [0, 'id'];
    editable_field = [
        [1, 'name'],
        [2, 'email'],
        [3, 'birthday'],
        [4, 'gender', '{"Nam": "Nam", "Nu": "Nu"}'],
        [5, 'phone'],
        [6, 'deleted', '{"0": "false", "1": "true"}'],
    ];
} else if (table == 'issues') {
    identifier_field = [0, 'id'];
    editable_field = [
        [1, 'content'],
        [2, 'room_id'],
        [3, 'student_id'],
        [4, 'created_at'],
        [5, 'deleted', '{"0": "false", "1": "true"}'],
    ];
}

// END LẤY DỮ LIỆU

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


// LỌC TIỀN ĐIỆN

$('#filter_year').change(function () {
    loadDataTableFilter('filterYear', table, identifier_field, editable_field)
});

$('#filter_month').change(function () {
    loadDataTableFilter('filterMonth', table, identifier_field, editable_field)
});

$('#filter_room_id').change(function () {
    loadDataTableFilter('filterRoom', table, identifier_field, editable_field)
});

$('#filter_status').change(function () {
    loadDataTableFilter('filterStatus', table, identifier_field, editable_field)
});

function loadDataTableFilter(method, table, identifier_field, editable_field) {
    console.log('loading table ' + table)
    $.ajax({
        'type': 'POST',
        'url': 'manager/tables/' + table + '/' + method,
        'data': {
            'filter_year': $('#filter_year').val(),
            'filter_month': $('#filter_month').val(),
            'filter_room_id': $('#filter_room_id').val(),
            'filter_status': $('#filter_status').val()
        },
        'dataType': 'json',
        success: function (data) {
            console.log('loaded table ' + table)
            $('tbody').html(data)
            console.log(data)
            tableData("manager", table, identifier_field, editable_field)
        },
        error: function () {
            console.log('Có lỗi xảy ra!')
        }
    });
}

$(window).load(function () {
    if (table == 'users' || table == 'electrics' || table == 'waters' || table == 'misconducts' || table == 'students' || table == 'issues') {
        loadDataTable(role, table, identifier_field, editable_field);
    }
});

$(document).ready(function () {
    $('#filter_role').change(function () {
        $.ajax({
            'type': 'POST',
            'url': 'admin/tables/users/role',
            'data': {
                'role': $('#filter_role').val(),
            },
            'dataType': 'json',
            success: function (data) {
                $('tbody').html(data)
                tableData(role, table, identifier_field, editable_field)
            },
            error: function () {
                console.log('Có lỗi xảy ra!')
            }
        });
    });
});
