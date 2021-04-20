$(document).ready(function () {

    // if(sessionStorage.getItem("id")==null){
    //     window.location = '../../pages/login.html';
    // }
 
    $('#register-form').bind("submit", function (e) {

        if ($('.mobileno').val().length < 8) {
            alert('Invalid mobile number');
            return;
        }

        var email = $('.email').val();
        var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
        if (!pattern.test(email)) {
            alert("Invalid email id");
            return;
        }

        if ($('.password').val() != $('.confirmpassword').val()) {
            alert('Password is not match');
            return;
        }

        var customer = {
            firstname: $('.firstname').val(),
            lastname: $('.lastname').val(),
            mobileno: $('.mobileno').val(),
            email: $('.email').val(),
            password: $('.password').val(),
            termandcondition: true,
            createdate: new Date().toDateString()
        }

        console.log(customer.password);

        $.post("http://localhost:3000/xampp/htdocs/Stock-Ganesha.io/php/Customer/controller.php", {
            action: 'register',
            customer: JSON.stringify(customer)
        }, function (res) {
            if(res['status'] == true){
                alert("Registration Sucessful")
            }
            else{
                alert("Fail to register.")
            }
        });

    });


    $('#login-form').bind("submit", function (e) {
        e.preventDefault();

        var email = $('.email').val();
        var password = $('.password').val();

        $.post("http://localhost:3000/xampp/htdocs/Stock-Ganesha.io/php/Customer/controller.php", {
            action: 'login',
            username: email,
            password: password,
        }, function (res) {
            console.log(res);
            var data = JSON.parse(res);
            console.log(data.id);
            if (data.status) {
                sessionStorage.setItem("id",data.id);
                var url = "../../pages/profile.html?id="+data.id;
                window.location.replace(url);
            } else {
                alert("Invalid username password");
            }
        });
    });
});



