function loadElectricData() {
    
}

function loadWaterData() {

}

$(window).load(function () {
    var isSendBill = $(location).attr("href").split("/").pop();
    if (isSendBill === 'sendbill') {
        loadElectricData();
        loadWaterData();
        console.log('Hi');
    }
});