<?php
session_start();
$status = $_SESSION["status"];
$email = $_SESSION["email"];

$host = "mysql1004.mochahost.com";
$user = "gravo1_developer";
$password = "Developer123";
$database = "gravo1_gravoDB";
$conn = mysqli_connect($host, $user, $password, $database);
if ($status === 200) {
    ?>

    <html>
        <head>
            <title>My Subscribers</title>

            <!-- w3 stylesheet-->
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <!--Import Google Icon Font-->
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <link href="css/materialize.min.css" rel="stylesheet">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates|Quicksand" rel="stylesheet">

            <!--Let browser know website is optimized for mobile-->
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

            <style>
                body {
                    font-family: "Quicksand", sans-serif;
                }
                #user {
                    padding: 5px;
                }
                #logout {
                text-decoration:none;
                    width: 80px;
                    -webkit-transition: width 2s;
                    transition: width 2s;
                    font-size: 0px;
                    height: 80px;
                    background-color: #ffdb49;
                    color: white;
                }
                #logout:hover {
                text-decoration:none;
                    width: 300px;
                    font-size: 30px;
                    height: 80px;
                }
                h2 {
                    color: gray;
                    font-family: "Quicksand", sans-serif;
                    letter-spacing: 10px;
                    width: 100%;
                    text-align: center;
                }
                #user{
                    color:gray;background-color:whitesmoke; border-radius: 5px; width:100%;
                }
                #userDetails{
                    padding-bottom:10px;padding-left:15px;padding-right:15px;
                }
                #user-name {
                    color: white;
                    background-color: #4bc399;
                    font-size: 30px;
                    padding: 10px;
                    border-top-left-radius: 5px;
                    border-top-right-radius: 5px;
                    border: none;
                    width: 100%;
                }

                #email-password{
                    font-size: 25px;
                }
                #title{
                	font-size: 35px;
                }

                @media only screen and (max-width: 500px) {
                    #logout {
                    text-decoration:none;
                        width: 50px;
                        -webkit-transition: width 2s;
                        transition: width 2s;
                        font-size: 0px;
                        height: 50px;
                        background-color: #ffdb49;
                        color: white;
                    }
                    #logout:hover {
                    text-decoration:none;
                        width: 200px;
                        font-size: 15px;
                        height: 50px;
                    }
                    #user-name {
                        color: white;
                        background-color: #4bc399;
                        font-size: 20px;
                        padding: 10px;
                        border-top-left-radius: 5px;
                        border-top-right-radius: 5px;
                        border: none;
                        width: 100%;
                    }
                    #email-password{
                        font-size: 15px;
                    }
                    #title{
                    	font-size: 25px;
                    }
                }



            </style>

        </head>
        <body>
            <div id="" class="center w3-card" style="padding: 5px;">
                <h2 id="title">SUBSCRIBERS</h2>
            </div class="glyphicon">
            <a id="logout"style="background-color:#FFDB49; padding: 20px; padding-left:30px; color: white" class="w3-card right glyphicon" href="logout.php">&#xe163;&nbsp;Logout</a> 
            
            <div style="padding: 20px; background-color: white; height: 100%;">


                <?php
                if (mysqli_connect($host, $user, $password, $database)) {

                    $items = getUser($conn);

                    if (empty($items)) {
                        $jsonString = jsonResponse(401, "Bad Credentials", NULL);
                    } else {
                        $jsonString = jsonResponse(200, "retrieved users", $items);
                        $allData = json_decode($jsonString);


                        foreach ($allData as $value) {
                            $userJSON = json_encode($value);
                            $getUser = json_decode($userJSON);
                            $user_name = $getUser->name;
                            $user_email = $getUser->email;
                            $user_number = $getUser->number;
                            ?>
                            <div id="user" class="container w3-card" style="margin-bottom: 20px;">
                                <p id="user-name"class="w3-card"><?php echo $user_email ?></p>
                                <div id="userDetails">
                                    <p id="email-password" >Email: <a href='mailto:<?php echo $user_name ?> '><?php echo $user_name ?></a><br>Number: <?php echo $user_number ?></p>
                                </div>
                            </div>

                            <?php
                        }
                    }
                } else {
                    jsonResponse(403, "Forbidden", NULL);
                }
                ?>
            </div>
        </body>
    </html>
    <?php
} else {
    ?><html><head><!-- w3 stylesheet-->
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <!--Import Google Icon Font-->
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <link href="css/materialize.min.css" rel="stylesheet">

            <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates|Quicksand" rel="stylesheet">

            <!--Let browser know website is optimized for mobile-->
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

            <style>
                body{
                    font-family: "Quicksand", sans-serif;
                }
                #id{
                    padding: 5px;
                }
            </style></head><body><div class="container w3-card" style='color:black;background-color:whitesmoke; border-radius: 5px; width:80%; padding:25px;' class='w3-card'>
                <h3>You are not logged in yet!</h3><a href="adminLogin.php" style="font-size:20px; color"> Click here to Login</a>
            </div></body></html><?php
}

function jsonResponse($status, $status_message, $data) {
    $response['result'] = $data;
    $json_response = json_encode($data);
    return $json_response;
//    header("Location: https://greenravolution.com/signup.php");
}

function getUser($conn) {
    $resultset = mysqli_query($conn, "SELECT * from subscribers;") or die(json_encode($response["error"] = mysqli_error($conn)));

    $data = array();
    while ($rows = mysqli_fetch_assoc($resultset)) {
        $data[] = $rows;
    }
    return $data;
}
