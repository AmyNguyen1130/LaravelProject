// VIEW WATER BILL BY MONTH

$(document).ready(function () {

    $('#month_water').change(function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            'type': 'POST',
            'url': 'student/getWaterByMonth',
            'data': {
                'month_water': $('#month_water').val()
            },
            'dataType': 'json',
            success: function (data) {
                console.log(data);
                html = '';
                count = 0;
                $.each(data.waters, function (key, value) {
                    count++;
                    html += '<tr style= "background:' + ((data.room_current.room_id == value.room_id) ? '#ffff00' : '') + '">';
                    html += '<td>' + count + '</td>';
                    html += '<td>' + value.room_name + '</td>';
                    html += '<td>' + value.time + '</td>';
                    html += '<td>' + value.old_number + '</td>';
                    html += '<td>' + value.new_number + '</td>';
                    html += '<td>' + value.price + '</td>';
                    html += '<td>' + ((value.status == 1) ? 'Đã Nộp' : 'Chưa Nộp') + '</td>';
                    html += '</tr>';
                });
                $('#table_water tbody').html(html)
            },
            error: function () {
                console.log('Lỗi')
            }
        });
    });

    $('#month_electric').change(function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            'type': 'POST',
            'url': 'student/getElectricByMonth',
            'data': {
                'month_electric': $('#month_electric').val()
            },
            'dataType': 'json',
            success: function (data) {
                console.log(data);
                html = '';
                count = 0;
                $.each(data.electric, function (key, value) {
                    count++;
                    html += '<tr style= "background:' + ((data.room_current.room_id == value.room_id) ? '#ffff00' : '') + '">';
                    html += '<td>' + count + '</td>';
                    html += '<td>' + value.room_name + '</td>';
                    html += '<td>' + value.time + '</td>';
                    html += '<td>' + value.old_number + '</td>';
                    html += '<td>' + value.new_number + '</td>';
                    html += '<td>' + value.price + '</td>';
                    html += '<td>' + ((value.status == 1) ? 'Đã Nộp' : 'Chưa Nộp') + '</td>';
                    html += '</tr>';
                });
                $('#table_electric tbody').html(html)
            },
            error: function () {
                console.log('Lỗi')
            }
        });
    });
});