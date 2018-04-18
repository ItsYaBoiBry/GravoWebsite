<?php

header("Content-Type:application/json");
$host = "mysql1004.mochahost.com";
$user = "gravo1_bryan";
$pw = "bryan123";
$database = "gravo1_gravoDB";
$conn = mysqli_connect($host, $user, $pw, $database);

$email = $_POST['getEmail'];

$password = hash("sha256", $_POST['getPassword']);
session_start();


if ($conn) {
    if (!empty($email)) {
        $items = getUser($email, $password, $conn);

        if (empty($items)) {
            $jsonString = jsonResponse(401, "Bad Credentials", NULL);
           
         
            echo $jsonString;
           
        } else {
            echo jsonResponse(200, "Success", $items);
         
        }
    } else {
        echo jsonResponse(400, "Invalid Request", NULL);
        
    }
} else {
    echo "invalid connection";
}

function jsonResponse($status, $status_message, $data) {
    $response['status'] = $status;
    $response['status_message'] = $status_message;
    $response['user'] = $data;
    $json_response = json_encode($response);
    return $json_response;
}

function getUser($email, $password, $conn) {
    $sql = "SELECT id, first_name, last_name, email, number, address, role_id FROM user WHERE email like '%$email%' AND password = '$password';";
    $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));
    $data = array();
    while ($rows = mysqli_fetch_assoc($resultset)) {
        $data[] = $rows;
    }
    return $data;
}
