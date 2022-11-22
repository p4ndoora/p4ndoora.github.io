<?php

    $loser = "<p style='color: darkseagreen; float: left; font-weight: bold; font-family: \"Norwester\", sans-serif;'>[LOSER]</p>"; // [LOSER]
    $user = "<p style='color: cornflowerblue; float: left; font-weight: bold; font-family: \"Norwester\", sans-serif;'>[USER]</p>"; // [USER]
    $admin =  "<p style='color: red; float: left; font-weight: bold; font-family: \"Norwester\", sans-serif;'>[ADMIN]</p>"; // [ADMIN]
    
    
    $noob = "<p style='color: darkseagreen;float: left; font-weight: bold; font-family: \"Norwester\", sans-serif;'>[NOOB]</p>"; // 1
    $advanced = "<p style='color: cornflowerblue;float: left; font-weight: bold; font-family: \"Norwester\", sans-serif;'>[ADVANCED]</p>"; // 2
    $god = "<p style='color: yellow;float: left; font-weight: bold; font-family: \"Norwester\", sans-serif; '>[GOD]</p>"; // 3 
        
    include("tokens.php");

    // echo generate_token();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="../css/norwester.css">
        <title>Chroom</title>        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
        $(document).ready(function(){
            $('#content').load("chroom.html");
        });

        </script>

        <style>
            html {
                background-color: #383c49;
            }
        </style>
    </head>
    <body>
        <div style="text-align: center; font-family: 'Norwester', sans-serif; color: darkseagreen;" id="begin_msg">
                    [+] The begin of the chatroom<br/><br/>
        </div>
        <div id="content"></div>
        <div id="foorm"></div>
        <form action="message.php" method="post" id="inputform">
            <input hidden type="text" value="549054839438243092342" name="id">
            <input hidden type="text" value="390930482948320948268" name="arch">
            <input style="background-color: #272a33; border: 0; color: white; border-radius: 5px; width: 100%; height: 30px; font-size: 20px; font-weight: bolder; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" type="text" name="msg">
            <input type="submit" name="go" value="Submit" hidden/>
        </form>
    </body>
</html>