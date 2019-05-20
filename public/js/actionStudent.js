// VIEW WATER BILL BY MONTH

$(document).ready(function () {
    $("#month_water").change(function (e) {
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
                $("#table_water tbody").html(data)
                tableData()
            },
            error: function () {
                console.log('Lỗi')
            }
        });
    });
});