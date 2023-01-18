<?php
    $server = "localhost";
    $username = "u584417084_tracker_user";
    $password = "gh%g7HGFF72sgsu28@#udj";
    $db = "u584417084_tracker_db";
    
    $conn = new mysqli($server, $username, $password, $db);
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
?>