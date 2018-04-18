<?php ?>
<html>

    <head>
        <title>Sign Up</title>

        <!-- w3 stylesheet-->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.min.css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates|Quicksand" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <link rel="icon" href="https://visualpharm.com/assets/691/Recycling-595b40b75ba036ed117d83eb.svg"> 





        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <style>
            #result{
                color: white;
                font-size: 20px;
                padding: 10px;
            }
            #title{
                margin: 0 auto; font-size: 30px; color: gray; letter-spacing: 10px;
            }
            #page-body{
                margin: 0 auto;
            }
            img{
                margin-top: 50px; pointer-events: none;width:250px;
            }
            #aboutUs{
                margin: 0 auto;
            }
            #aboutDesc{
                align-content: center; text-align: center; font-size: 30px; color: #D5DBDB;
            }
            #card{
                background-color:#4BC399; border-radius: 10px; padding-top: 10px;width: 80%;margin: 0 auto;margin-bottom: 50px;
            }
            #cardTitle{
                align-content: center; color: whitesmoke;padding-left: 20px;padding-right: 20px; font-size: 40px;
            }
            #userForm{
                margin: 0 auto; padding-top: 20px;
            }
            #title1{
                font-size:30px; left: auto;color: #FFFFFF;margin-right: 50px;text-align: right;
            }
            #title2{
                font-size:30px; left: auto;color: #FFFFFF;margin-right: 50px;text-align: right;
            }
            #title3{
                font-size:30px; left: auto;color: #FFFFFF;margin-right: 50px;text-align: right;
            }
            #input1{
                font-size: 30px;width:70%;padding: 10px; border-top: transparent; border-left: transparent; border-right: transparent ; border-bottom: transparent; box-shadow:none;background-color:#FFFFFF;border-radius: 20px;
            }
            #input2{
                font-size: 30px;width:70%;padding: 10px; border-top: transparent; border-left: transparent; border-right: transparent ; border-bottom: transparent; box-shadow:none;background-color:#FFFFFF;border-radius: 20px;
            }
            #input3{
                font-size: 30px;width:70%;padding: 10px; border-top: transparent; border-left: transparent; border-right: transparent ; border-bottom: transparent; box-shadow:none;background-color:#FFFFFF;border-radius: 20px;
            }
            #buttonSignup{
                border: none; background-color: #00A67C; width: 100%; height: 100px; font-size: 30px; color: whitesmoke;
            }
            @media only screen and (max-width: 620px) {
                #title{
                    margin: 0 auto; font-size: 20px; color: gray; letter-spacing: 10px;
                }
                #page-body{
                    margin: 0 auto;
                }
                img{
                    margin-top: 50px; pointer-events: none;width:150px;
                }
                #aboutUs{
                    margin: 0 auto;
                }
                #aboutDesc{
                    align-content: center; text-align: center; font-size: 20px; color: #D5DBDB;
                }
                #card{
                    background-color:#4BC399; border-radius: 10px; padding-top: 10px;width: 90%;margin: 0 auto;margin-bottom: 50px;
                }
                #cardTitle{
                    align-content: center; color: whitesmoke;padding-left: 20px;padding-right: 20px; font-size: 25px;
                }
                #userForm{
                    margin: 0 auto; padding-top: 20px;
                }

                #input1{
                    font-size: 20px;width:80%;padding: 5px; border-top: transparent; border-left: transparent; border-right: transparent ; border-bottom: transparent; box-shadow:none;background-color:#FFFFFF;border-radius: 20px;
                }
                #input2{
                    font-size: 20px;width:80%;padding: 5px; border-top: transparent; border-left: transparent; border-right: transparent ; border-bottom: transparent; box-shadow:none;background-color:#FFFFFF;border-radius: 20px;
                }
                #input3{
                    font-size: 20px;width:80%;padding: 5px; border-top: transparent; border-left: transparent; border-right: transparent ; border-bottom: transparent; box-shadow:none;background-color:#FFFFFF;border-radius: 20px;
                }
                #buttonSignup{
                    border: none; background-color: #00A67C; width: 100%; height: 100px; font-size: 20px; color: whitesmoke;
                }
                ::placeholder{
                    color: #717D7E;
                }
            }
            @media only screen and (max-width: 410px) {
                #title{
                    margin: 0 auto; font-size: 15px; color: gray; letter-spacing: 10px;
                }
                #page-body{
                    margin: 0 auto;
                }
                img{
                    margin-top: 50px; pointer-events: none;width:150px;
                }
                #aboutUs{
                    margin: 0 auto;
                }
                #aboutDesc{
                    align-content: center; text-align: center; font-size: 15px; color: #D5DBDB;
                }
                #card{
                    background-color:#4BC399; border-radius: 10px; padding-top: 10px;width: 90%; margin: 0 auto; margin-bottom: 50px;
                }
                #cardTitle{
                    align-content: center; color: whitesmoke;font-size: 20px;
                }
                #userForm{
                    margin: 0 auto; padding-top: 20px; width: 100%;
                }

                #input1{
                    font-size:15px;width:80%;padding: 5px; border-top: transparent; border-left: transparent; border-right: transparent ; border-bottom: transparent; box-shadow:none;background-color:#FFFFFF;border-radius: 20px;
                }
                #input2{
                    font-size: 15px;width:80%;padding: 5px; border-top: transparent; border-left: transparent; border-right: transparent ; border-bottom: transparent; box-shadow:none;background-color:#FFFFFF;border-radius: 20px;
                }
                #input3{
                    font-size: 15px;width:80%;padding: 5px; border-top: transparent; border-left: transparent; border-right: transparent ; border-bottom: transparent; box-shadow:none;background-color:#FFFFFF;border-radius: 20px;
                }
                #buttonSignup{
                    border: none; background-color: #00A67C; width: 100%; height: 100px; font-size: 20px; color: whitesmoke;
                }
                ::placeholder{
                    color: #717D7E;
                }
            }
        </style>



    </head>

    <body style="font-family: 'Quicksand',sans-serif; background: url('img/garbage_bags.jpg'); background-size: cover; background-repeat: no-repeat; background-position:center center; ">

        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>

        <div>
            <div id="page-header" class="collapsible-header w3-card">
                <h2 class="title" id="title">ABOUT US</h2>
            </div>
            <div id="page-body" class="center">

                <img src="img/gravo_logo.png">

                <div id="aboutUs" class="center">
                    <p id="aboutDesc">Recycle with us, it's <b>easy,
                            fun, educational, convenient & rewarding</b>!<br> Interested to find out more about <b>read recycling</b>?<br> Sign up now and we'll introduce you to recycling on demand<br></p>
                </div>

                <div id="card" class="w3-card center">
                    <p id="cardTitle">Register to receive updates and get the opportunity to test our upcoming App!</p>

                    <form id="userForm" name="getDetails" method="post" class="center-block">
                        <div>

                            <input id="input1" class="inputClass" type="text" name="getName"  required class="materialize-textarea grey-text-text" placeholder="Name eg(John Doe)" >
                        </div>
                        <div>

                            <input id="input2" type="email" name="getEmail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required class="materialize-textarea grey-text-text" placeholder="Email eg(someone@example.com)">
                        </div>
                        <div>

                            <input id="input3" type="tel" name="getNumber" class="materialize-textarea grey-text-text" placeholder="Number eg(9753 3579)">
                        </div>
                        <div class="w3-card center " style="margin-bottom: 50px; background-color: #00A67C; margin-top: 50px; border-bottom-left-radius:10px;border-bottom-right-radius:10px; ">
                            <button id="buttonSignup" type="submit">SUBMIT</button>
                        </div>

                    </form>
                    <div id="result">

                    </div>
                </div>

            </div>


        </div>
        <script>
            $("#result").hide();
            $("#userForm").submit(function (event) {
                var ajaxRequest;
                /* Stop form from submitting normally */
                event.preventDefault();
                /* Clear result div*/
                $("#result").html('');
                /* Get from elements values */
                var values = $(this).serialize();
                console.log(values);
                /* Send the data using post and put the results in a div */
                /* I am not aborting previous request because It's an asynchronous request, meaning 
                 Once it's sent it's out there. but in case you want to abort it  you can do it by  
                 abort(). jQuery Ajax methods return an XMLHttpRequest object, so you can just use abort(). */
                ajaxRequest = $.ajax({
                    url: "doSubscribe.php",
                    type: "post",
                    data: values
                });
                /*  request cab be abort by ajaxRequest.abort() */

                ajaxRequest.done(function (response, textStatus, jqXHR) {
                    $("#result").show();
                    // show successfully for submit message
                    $("#result").html(response);
                    console.log(response);
                    $("#userForm").hide();
                    $("#cardTitle").hide();
                });
                /* On failure of request this function will be called  */
                ajaxRequest.fail(function () {
                    // show error
                    $("#result").html('There is error while submitting!');
                    console.log("submit Fail");
                });
            });
        </script>

    </body>


</html>