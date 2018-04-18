<?php

header("Content-Type:application/json");

$type = $_GET['get_type'];
$id = $_GET['get_id'];
$host = "mysql1004.mochahost.com";
$user = "gravo1_bryan";
$password = "bryan123";
$database = "gravo1_gravoDB";

$conn = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect($host, $user, $password, $database)) {

    if ($type === "all") {
        $items = getUser($conn);
        $details = getDetail($conn);

        if (empty($items)) {
            $jsonString = jsonResponse(401, "Invalid Request", NULL);
            echo $jsonString;
        } else {
            $jsonString = jsonResponse(200, "success", $items, $details);

            echo $jsonString;
        }
    }else if($type === "withID"){
        $items = getTransactions($conn, $id);
        $details = getDetails($conn, $id);
        if (empty($items)) {
            $jsonString = jsonResponse(401, "Invalid Request", NULL);
            echo $jsonString;
        } else {
            $jsonString = jsonResponse(200, "success", $items, $details);

            echo $jsonString;
        }
    }
} else {
    $jsonString = jsonResponse(403, "Forbidden", NULL);
    echo $jsonString;

}

function jsonResponse($status, $status_message, $data, $data2) {
    $response['status'] = $status;
    $response['message'] = $status_message;
    $response['result'] = $data;
    $response['details'] = $data2;

    $json_response = json_encode($response);
    return $json_response;
}

function getUser($conn) {
    $resultset = mysqli_query($conn, "select * from transaction where collection_date = date_format(now(),'%Y-%m-%d');") or die(json_encode($response["error"] = mysqli_error($conn)));

    $data = array();
    while ($rows = mysqli_fetch_assoc($resultset)) {
        $data[] = $rows;
    }
    return $data;
}

function getTransactions($conn, $myId) {
    $resultset = mysqli_query($conn, "SELECT * from transaction WHERE id = $myId AND collection_date = date_format(now(),'%Y-%m-%d');") or die(json_encode($response["error"] = mysqli_error($conn)));

    $data = array();
    while ($rows = mysqli_fetch_assoc($resultset)) {
        $data[] = $rows;
    }
    return $data;
}

function getDetail($conn) {
    $resultset = mysqli_query($conn, "SELECT d.* from detail d, transaction t where d.transaction_id = t.id and t.collection_date = date_format(now(),'%Y-%m-%d');") or die(json_encode($response["error"] = mysqli_error($conn)));

    $data = array();
    while ($rows = mysqli_fetch_assoc($resultset)) {
        $data[] = $rows;
    }
    return $data;
}
function getDetails($conn, $myId) {
    $resultset = mysqli_query($conn, "SELECT * from detail WHERE transaction_id = $myId;") or die(json_encode($response["error"] = mysqli_error($conn)));

    $data = array();
    while ($rows = mysqli_fetch_assoc($resultset)) {
        $data[] = $rows;
    }
    return $data;
}
