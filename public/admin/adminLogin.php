<?php ?>
<html>
    <head>

        
        <title>Gravo Login</title>
        <!-- w3 stylesheet-->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.min.css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates|Quicksand" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <style>
            #id {
                color: whitesmoke;
            }
            #title {
                background-color: white;
            }
            #content-login {
                background-color: #4bc399;
                margin-top: 200px;
            }
            #myEmail{
                font-size: 30px;
                width: 90%;
                padding: 10px;
                margin: 5px;
                border-top: transparent;
                border-left: transparent;
                border-right: transparent;
                border-bottom: transparent;
                box-shadow: none;
               
            }
            #myPass{
                font-size: 30px;
                width: 90%;
                padding: 10px;
                margin: 5px;
                border-top: transparent;
                border-left: transparent;
                border-right: transparent;
                border-bottom: transparent;
                box-shadow: none;
               
            }
            #button-background {
                background-color: #00a67c;
                margin-top: 50px;
            }
            #login-button {
                border: none;
                background-color: #00a67c;
                width: 100%;
                height: 100px;
                font-size: 30px;
                color: whitesmoke;
            }
            @media only screen and (max-width: 500px) {
                #login-button {
                    border: none;
                    background-color: #00a67c;
                    width: 100%;
                    height: 70px;
                    font-size: 20px;
                    color: whitesmoke;
                }
                #myEmail {
                    font-size: 15px;
                    padding: 10px;
                    width: 90%;
                    margin: 5px;
                    border-top: transparent;
                    border-left: transparent;
                    border-right: transparent;
                    border-bottom: transparent;
                    box-shadow: none;
                    
                }
                #myPass {
                    font-size: 15px;
                    padding: 10px;
                    width: 90%;
                    margin: 5px;
                    border-top: transparent;
                    border-left: transparent;
                    border-right: transparent;
                    border-bottom: transparent;
                    box-shadow: none;
                    
                }
                #content-login {
                    background-color: #4bc399;
                    margin-top: 50px;
                }
            }

        </style>
    </head>
    <body style="background-color: whitesmoke">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>

        <div id="content" class="container">
            <div id = "title"class="header w3-card">
                <h3 class="title center" style="letter-spacing: 10px; width: 100%; text-align:center; padding: 20px; color: gray;">LOGIN</h3>
            </div>
        </div>

        <div class="container center" >
            <div id="content-login"class="header w3-card">

                <form name="email" action="doAdminLogin.php" method="post">
                    <div style="padding:30px;">
                        <input type="text" name="getEmail"  required class="materialize-textarea blue-grey-text textarea" id="myEmail"style="background-color: #ffffff;
                    border-radius: 20px;"placeholder="Email">
                        <input type="password" name="getPassword"  required class="materialize-textarea blue-grey-text textarea" id="myPass"style="background-color: #ffffff;
                    border-radius: 20px;" placeholder="Password">

                        <div id="button-background"class="w3-card center">
                            <button id="login-button"type="submit">LOGIN</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </body>
</html>  

