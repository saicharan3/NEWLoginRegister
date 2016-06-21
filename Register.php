<?php
    $con = mysqli_connect("mysq4.000webhost.com", "a4794786_BUNNY", "saicharan3", "a4794786_OUFEED");
    
    $Email = $_POST["Email"];
    $Username = $_POST["Username"];
    $Password = $_POST["Password"];
    $RetypePassword = $_POST["RetypePassword"];

    $statement = mysqli_prepare($con, "INSERT INTO user (Email, Username, Password, RetypePassword) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, "siss", $Email, $Username, $Password, $RetypePassword);
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>
