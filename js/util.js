$(document).ready(function(){

    $('.edit').click(function(){
        document.querySelector("input[name='firstname']").disabled = false;
        document.querySelector("input[name='lastname']").disabled = false;
        document.querySelector("input[name='email']").disabled = false;
        document.querySelector("input[name='mobileno']").disabled = false;
        document.querySelector("input[name='dob']").disabled = false;

        document.querySelector("input[name='address1']").disabled = false;
        document.querySelector("input[name='address2']").disabled = false;
        document.querySelector("input[name='city']").disabled = false;
        document.querySelector("input[name='state']").disabled = false;
        document.querySelector("input[name='zipcode']").disabled = false;

        document.querySelector("#personal-info").disabled = false;
        document.querySelector("#address").disabled = false;


        document.querySelector('.edit').innerHTML = "Edit Mode";
    });
});