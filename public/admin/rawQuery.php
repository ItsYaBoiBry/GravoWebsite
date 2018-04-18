<?php

header("Content-Type:application/json");
$query = $_GET['query'];

$host = "mysql1004.mochahost.com";
$user = "gravo1_developer";
$password = "Developer123";
$database = "gravo1_gravoDB";

$conn = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect($host, $user, $password, $database)) {

    $items = getQuery($conn,$query);


    if (empty($items)) {
        $jsonString = jsonResponse(401, "Invalid Request", NULL);
        echo $jsonString;
    } else {
        $jsonString = jsonResponse(200, "success", $items, $details);
        echo $jsonString;
    }
} else {
    $jsonString = jsonResponse(403, "Forbidden", NULL);
    echo $jsonString;
}

function jsonResponse($status, $status_message, $data) {
    $response['status'] = $status;
    $response['message'] = $status_message;
    $response['result'] = $data;

    $json_response = json_encode($response);
    return $json_response;
}

function getQuery($conn, $item) {
    $resultset = mysqli_query($conn,$item) or die(json_encode($response["error"] = mysqli_error($conn)));

    $data = array();
    while ($rows = mysqli_fetch_assoc($resultset)) {
        $data[] = $rows;
    }
    return $data;
}

