<?php
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])){
        //connect to database
        include('config.php');

        //collect form data
        $track_code = test_input($_POST['trackNumber']);

        //loop through database for tracking ID
        $sql = "SELECT * FROM `tracking_codes` WHERE `tracking_id` = '$track_code'";
        $res = $conn->query($sql);
        if($res){
            $row = $res->fetch_assoc();
            if(count($row) > 0){
                //create tracking_id session to be used within the application
                $_SESSION["tracking_id"] = $row['tracking_id'];
                $_SESSION["sender_name"] = $row['sender_name'];
                $_SESSION["sender_email"] = $row['sender_email'];
                $_SESSION["package_status"] = $row["package_status"];
                $_SESSION["content"] = $row["content"];
                $_SESSION["delivery_type"] = $row["delivery_type"];
                $_SESSION["receiver_name"] = $row["receiver_name"];
                $_SESSION["delivery_officer"] = $row["delivery_officer"];
                $_SESSION["item_weight"] = $row["item_weight"];
                $_SESSION["parcel_color"] = $row["parcel_color"];
                $_SESSION["charges"] = $row["charges"];
                $_SESSION["total_amt"] = $row["total_amount"];
                $_SESSION["destination"] = $row["destination"];
                $_SESSION["dispatch_date"] = $row["dispatch_date"];
                $_SESSION["arrival_date"] = $row["arrival_date"];
                $_SESSION["receiver_address"] = $row["receiver_address"];
                $_SESSION["dispatch_from"] = $row["dispatch_from"];
                $_SESSION["parcel_location"] = $row["parcel_location"];
                $_SESSION["parcel_path"] = $row["parcel_path"];

                // redirect to the page you want the authenticated user to access
                echo "<script type='text/javascript'> location = '/client.php'; </script>"; 
            }
            else{
                // return an error message if tracking code is incorrect
                $_SESSION["error"] = "*Please enter a correct code.";
                echo "<script type='text/javascript'> history.back();  </script>"; 
            }
        }
        else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
    else {
        //return back to tracker 
        echo "<script type='text/javascript'> location = '/track.php'; </script>"; 
    }

?>