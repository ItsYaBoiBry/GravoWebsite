<?php

header("Content-Type:application/json");
$host = "mysql1004.mochahost.com";
$user = "gravo1_developer";
$pw = "Developer123";
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
            $jsonString = jsonResponse(200, "Success", $items);
            echo "Success... Redirecting...";
            $stringData = json_decode($jsonString);
            $status = $stringData -> status;
            $_SESSION["status"] = $status;
            $_SESSION["email"] = $email;
            header("refresh:2;url=getSubscribers.php");
        }
    } else {
        jsonResponse(400, "Invalid Request", NULL);
        
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
    $sql = "SELECT * FROM user WHERE email like '%$email%' AND password = '$password' AND role_id = 1;";
    $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));
    $data = array();
    while ($rows = mysqli_fetch_assoc($resultset)) {
        $data[] = $rows;
    }
    return $data;
}
