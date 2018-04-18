<?php

$host = "mysql1004.mochahost.com";
$user = "gravo1_developer";
$password = "Developer123";
$database = "gravo1_gravoDB";
$conn = mysqli_connect($host, $user, $password, $database);

$name = $_POST["getName"];
$email = $_POST["getEmail"];
$number = $_POST["getNumber"];

if ($name === null || $email === null || $number === null) {
    
} else {
    if ($conn) {


        $items = getUser($name, $email, $number, $conn);


        if (empty($items)) {
            jsonResponse(401, "Bad Credentials", NULL);
        } else {
        echo "<div><h3 style='color:white; font-size:40px;'>Thank you for subscribing!</h3><p>Do check your email for any updates regarding Gravo!</p></div>";


            $to = $email; // <– replace with your address here
            $subject = "Registration";

            $message = "<html>
    <head>
        
        <!-- w3 stylesheet-->
        <link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>
        <!--Import Google Icon Font-->
        <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
        <link href='css/materialize.min.css' rel='stylesheet'>

        <link href='https://fonts.googleapis.com/css?family=Montserrat+Alternates|Quicksand' rel='stylesheet'>

        <!--Let browser know website is optimized for mobile-->
        <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    </head>

    <body>
        <script type='text/javascript' src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
        <script type='text/javascript' src='js/materialize.min.js'></script>
        <div id='page-header' class='collapsible-header w3-card' style='background-color:#4BC399;'>
            <h2 class='title center' style='margin: 0 auto;width:100%; font-size: 30px; color: whitesmoke; letter-spacing: 10px; padding: 10px; text-alignment: center;'>THANK<br>YOU<br> FOR<br> REGISTERING!<br></h2>
        </div><br>
        <div style='color: gray; padding:10px;font-size:25px;width:100%; margin: 0 auto; text-alignment: center;' class='center'>
            <p>Thank you for registering $name! We will be notifying you once our App goes live so do keep a lookout!</p><hr style='margin-left:40px; margin-right: 40px;'>
            <h3 style='color: Black; font-size:30px;letter-spacing: 10px; width:100%; margin: 0 auto; text-alignment: center;' class='center'>MORE ABOUT US</h3><br>
            <p style='color: gray; font-size:20px;width:100%; margin: 0 auto; text-alignment: center;' class='center'>GRAVO, an entity within the GREEN RAVOLUTION family of companies was set up to develop and provide innovative solutions within the 3R sphere (Reduce/Reuse/Recycle).</p><br><p style='color: gray; font-size:20px;width:100%; margin: 0 auto; text-alignment: center;' class='center'> Starting with Recycling, GRAVO’s core focus is to provide recycling convenience through technology and partner networks aimed at residential and commercial entities throughout Singapore.</p><br><p style='color: gray; font-size:20px;width:100%; margin: 0 auto; text-alignment: center;' class='center'> GRAVO is also a platform through which environmental information and educational material can be accessed with ease for all subscribers.</p>
        </div>
        <div id='fbLink' class='center' style='margin-top: 50px;'>
            <a style='margin: 0 auto; background: #0059bc; color: white; padding: 20px; font-size: 20px; border-radius: 5px;' class='w3-card' href='https://www.facebook.com/gravosg/'>Find us on Facebook</a>
        </div>
        <br><br>
        <div style='scolor: gray; padding:10px;font-size:20px;width:100%; margin: 0 auto; text-alignment: center;' class='center'>Regards<br>Gravo Team<br><br><img style='height:70px' src='https://greenravolution.com/img/gravo_logo_black.png'></div>
    </body>
    <footer style='padding: 10px; color: gray;'><br><br><br>copyright 2018 Green Ravolution</footer>

</html>";
            
        
            $from = "signups@greenravolution.com";

            // To send HTML mail, the Content-type header must be set
            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

            // Create email headers
            $headers .= 'From: ' . $from . "\r\n" .
                    'Reply-To: ' . $from . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();

            if (mail($email, $subject, $message, $headers)) {
               
            } else {
                
            }
        }
        header("refresh:2;url=https://greenravolution.com"); /* Redirect browser */
    } else {
        jsonResponse(403, "Forbidden", NULL);
    }
}


function jsonResponse($status, $status_message, $data) {
    $response['status'] = $status;
    $response['status_message'] = $status_message;
    $response['result'] = $data;
    $json_response = json_encode($response);
    echo $json_response;
//    header("Location: https://greenravolution.com/signup.php");
}
function getUser($email, $name, $number, $conn) {
   
    $data = mysqli_query($conn, "INSERT INTO subscribers(name,email,number,registered_date) VALUES ('$name','$email','$number',NOW());") or die(json_encode($response["error"] = mysqli_error($conn)));

    return $data;
}