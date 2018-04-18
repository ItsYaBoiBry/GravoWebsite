<?php
header("Content-Type:application/json");
$host = "mysql1004.mochahost.com";
$user = "gravo1_bryan";
$password = "bryan123";
$database = "gravo1_gravoDB";
$getfunction = $_GET["api_type"];
$getId = $_GET["get_id"];

$conn = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect($host, $user, $password, $database)) {
    if ($getfunction === "withID") {
        $items = getDetail($conn, $getId);

        if (empty($items)) {
            $jsonString = jsonResponse(401, "Invalid Request", NULL);
            echo $jsonString;
        } else {
            $jsonString = jsonResponse(200, "retrieved users", $items);
            echo $jsonString;
        }
    }else if($getfunction === "all"){
         $items = getDetails($conn, $getId);

        if (empty($items)) {
            $jsonString = jsonResponse(401, "Invalid Request", NULL);
            echo $jsonString;
        } else {
            $jsonString = jsonResponse(200, "retrieved users", $items);
            echo $jsonString;
        }
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
//    header("Location: https://greenravolution.com/signup.php");
}

function getDetail($conn, $getId) {
    $query = "select * FROM detail WHERE transaction_id = $getId;";
    $resultset = mysqli_query($conn, $query) or die(json_encode($response["error"] = mysqli_error($conn)));

    $data = array();
    while ($rows = mysqli_fetch_assoc($resultset)) {
        $data[] = $rows;
    }
    return $data;
}

function getDetails($conn, $getId) {
    $query = "select * FROM detail;";
    $resultset = mysqli_query($conn, $query) or die(json_encode($response["error"] = mysqli_error($conn)));

    $data = array();
    while ($rows = mysqli_fetch_assoc($resultset)) {
        $data[] = $rows;
    }
    return $data;
}
