$(document).ready(function () {

    const customer_id = sessionStorage.getItem("id");

    $.get("http://localhost:3000/xampp/htdocs/Stock-Ganesha.io/php/Address/controller.php", {
        action: 'readById',
        id:customer_id
    }, function (res) {
        data = JSON.parse(res);

        document.querySelector("input[name='address1']").value = data.data[0]["address1"];
        document.querySelector("input[name='address2']").value = data.data[0]["address2"];
        document.querySelector("input[name='city']").value = data.data[0]["city"];
        document.querySelector("input[name='state']").value = data.data[0]["state"];
        document.querySelector("input[name='zipcode']").value = data.data[0]["zipcode"];
    });

    $('#address').on('click', function(){
        $.post("http://localhost:3000/xampp/htdocs/Stock-Ganesha.io/php/Address/controller.php", {
            action: 'create',
            
        }, function (res) {
            data = JSON.parse(res);
            console.log(data);
        });   
    });
});