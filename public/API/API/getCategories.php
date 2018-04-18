<?php
header("Content-Type:application/json");
$host = "mysql1004.mochahost.com";
$user = "gravo1_bryan";
$password = "bryan123";
$database = "gravo1_gravoDB";


$conn = mysqli_connect($host, $user, $password, $database);
    if (mysqli_connect($host, $user, $password, $database)) {

        $items = getDetail($conn);

        if (empty($items)) {
            $jsonString = jsonResponse(401, "Invalid Request", NULL);
            echo $jsonString;
        } else {
            $jsonString = jsonResponse(200, "retrieved categories", $items);
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
//    header("Location: https://greenravolution.com/signup.php");
}

function getDetail($conn) {
    $query = "select * FROM category;";
    $resultset = mysqli_query($conn, $query) or die(json_encode($response["error"] = mysqli_error($conn)));

    $data = array();
    while ($rows = mysqli_fetch_assoc($resultset)) {
        $data[] = $rows;
    }
    return $data;
}
