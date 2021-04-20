$(document).ready(function () {

    const customer_id = sessionStorage.getItem("id");

    $.get("http://localhost:3000/xampp/htdocs/Stock-Ganesha.io/php/Customer/controller.php", {
        action: 'readById',
        id:customer_id
    }, function (res) {
        data = JSON.parse(res);

        document.querySelector("input[name='firstname']").value = data.data[0]["first_name"];
        document.querySelector("input[name='lastname']").value = data.data[0]["last_name"];
        document.querySelector("input[name='email']").value = data.data[0]["email_id"];
        document.querySelector("input[name='mobileno']").value = data.data[0]["mobile_number"];
        document.querySelector("input[name='dob']").value = data.data[0]["date_of_birth"];

    });

    $('#personal-info').on('click', function(){

        const firstname = document.querySelector("input[name='firstname']").value;
        const lastname = document.querySelector("input[name='lastname']").value;
        const email = document.querySelector("input[name='email']").value;
        const mobileno = document.querySelector("input[name='mobileno']").value; 
        const dob = document.querySelector("input[name='dob']").value;

        console.log(dob);

        if(!firstname || !lastname || !email || !mobileno || !dob ){
            document.querySelector('.error').innerHTML = "please fill all required fields";
            return;
        }

        var customer = {
            firstname:firstname,
            lastname:lastname,
            email:email,
            mobileno:mobileno,
            dob:toString(dob),
        }

        $.post("http://localhost:3000/xampp/htdocs/Stock-Ganesha.io/php/Customer/controller.php", {
            action: 'update',
            customer:customer,
        }, function (res) {
            console.log(res);
        });   
    });
    
});



