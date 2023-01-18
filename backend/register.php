<?php
    session_start(); 

    if(isset($_POST['register'])){
        $recipient_name = $_POST['recipient_name'];
        $email = $_POST['email'];
        $recipient_address = $_POST['recipient_address'];
        $sender_name = $_POST['sender_name'];
        $package_status = $_POST['package_status'];
        $package_content = $_POST['package_content'];
        $dispatch_from = $_POST['dispatch_from'];
        $delivery_type = $_POST['delivery_type'];
        $delivery_officer = $_POST['delivery_officer'];
        $item_weight = $_POST['item_weight'];
        $parcel_color = $_POST['parcel_color'];
        $clearance_charges = $_POST['clearance_charges'];
        $total_amount = $_POST['total_amount'];
        $destination_country = $_POST['destination_country'];
        $dispatch_date = $_POST["dispatch_date"];
        $arrival_date = $_POST['arrival_date'];
        $tracking_code = $_POST['tracking_code'];

        //connect to database
        include('config.php');

        $sql = "INSERT INTO `tracking_codes` (
                `tracking_id`, `email`, `sender_name`, `package_status`, `content`, `dispatch_from`, `delivery_type`,
                `receiver_name`, `receiver_address`, `delivery_officer`, `item_weight`, `parcel_color`, `charges`, `total_amount`, 
                `destination`, `diSpatch_date`, `arrival_date`
            ) 
            VALUES (
                '$tracking_code', '$email', '$sender_name', '$package_status', '$package_content', '$dispatch_from',
                '$delivery_type', '$recipient_name', '$recipient_address', '$delivery_officer', '$item_weight', '$parcel_color', 
                '$clearance_charges', '$total_amount', '$destination_country', '$dispatch_date', '$arrival_date'
            )
        ";

        $res = $conn->query($sql);
        if($res){
            $_SESSION['success'] = "Registration is successful!";
            
            $_SESSION["tracking_id"] = $tracking_code;
            $_SESSION["sender_name"] = $sender_name;
            $_SESSION["sender_email"] = $email;
            $_SESSION["package_status"] = $package_status;
            $_SESSION["content"] = $package_content;
            $_SESSION["delivery_type"] = $delivery_type;
            $_SESSION["receiver_name"] = $recipient_name;
            $_SESSION["delivery_officer"] = $delivery_officer;
            $_SESSION["item_weight"] = $item_weight;
            $_SESSION["parcel_color"] = $parcel_color;
            $_SESSION["charges"] = $clearance_charges;
            $_SESSION["total_amt"] = $total_amount;
            $_SESSION["destination"] = $destination_country;
            $_SESSION["dispatch_date"] = $dispatch_date;
            $_SESSION["arrival_date"] = $arrival_date;
            $_SESSION["receiver_address"] = $recipient_address;
            $_SESSION["dispatch_from"] = $dispatch_from;

            echo "<script> location = '/client.php' </script>";
        }
        else{
            // return an error message if tracking code is incorrect
                $_SESSION["error"] = "*Error creating a new record.";
                echo "<script type='text/javascript'> history.back();  </script>";
        }
    }

?>