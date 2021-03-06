<?php
    
    include './service.php';
    include './model.php';

    $service = new CustomerService();

    switch($_POST['action']){

        case "insert":
            $customer = new Customer();
            $customer->setFirstName($_POST['firstName']);
            $customer->setLastName($_POST['lastName']);
            $customer->setEmailId($_POST['emailId']);
            $customer->setMobileNumber($_POST['mobileNumber']);
            $customer->setDateOfBirth($_POST['dateOfBirth']);
            $customer->setPhoneNumber($_POST['phoneNumber']);
            $customer->setTermAndCondition($_POST['termsAndCondtion']);

            $result = $service->create($customer);

            if($result){
                echo "Registration successfull.";
            }else{
                echo "Registeration failed.";
            }

            break;
        
        case "read":
            $result = $service->read();

            echo $result;
            break;

        case "update":
            $customer = new Customer();
            $customer->setFirstName($_POST['firstName']);
            $customer->setLastName($_POST['lastName']);
            $customer->setEmailId($_POST['emailId']);
            $customer->setMobileNumber($_POST['mobileNumber']);
            $customer->setDateOfBirth($_POST['dateOfBirth']);
            $customer->setPhoneNumber($_POST['phoneNumber']);
            $customer->setTermAndCondition($_POST['termsAndCondtion']);

            $result = $service->update($_POST['id'],$customer);

            if($result){
                echo "Profile updated.";
            }else{
                echo "Failed to update.";
            }

            break;

        case "delete":
            $id = $_POST['id'];

            $result = $service->delete($id);

            if($result){
                echo 'Profile deleted.';
            }else{
                echo 'Fail to delete.';
            }

            break;
    }
?>