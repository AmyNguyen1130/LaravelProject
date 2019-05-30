function loadDataToSendBill() {
    $.ajax({
        url: 'manager/sendbill/loadData',
        method: 'GET'
    }).done(function (data) {
        $('#table_electrics tbody').html(data.htmlElectrics)
        $('#table_waters tbody').html(data.htmlWaters)
        console.clear()
    })
}

$(window).load(function () {
    var isSendBill = $(location).attr("href").split("/").pop();
    if (isSendBill == 'sendbill') {
        console.log("loading table electrics and waters");
        loadDataToSendBill();
        console.log("table electrics and waters loaded");
    }
});

$('#sendbill_month').change(function () {
    $.ajax({
        'type': 'POST',
        'url': 'manager/filterBeforeSend',
        'data': {
            'sendbill_month': $('#sendbill_month').val(),
            'sendbill_year': $('#sendbill_year').val(),
        },
        'dataType': 'json',
        success: function (data) {
            $('#table_electrics tbody').html(data.htmlElectrics)
            $('#table_waters tbody').html(data.htmlWaters)
            console.clear()
        },
        error: function () {
            console.log('Có lỗi xảy ra!')
        }
    });
});