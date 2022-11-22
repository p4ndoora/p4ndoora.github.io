<?php
    if (isset($_POST)) {
        include("index.php");

        $USERNAME = "pandora" . random_int(11111, 99999);
        $MESSAGE = $_POST['msg'];

        $id = $_POST['id'];
        $arch = $_POST['arch'];

        $user_id = "549054839438243092342";
        $admin_id = "196828186928502859281";
        
        // badges

        $noob_id = "390930482948320948268";
        $advanced_id = "957238186592348720198";
        $god_id = "759234328329482094329";

        $USERNAME = filter_var($USERNAME, FILTER_SANITIZE_STRING);
        $MESSAGE = filter_var($MESSAGE, FILTER_SANITIZE_STRING);


        if ($id == $admin_id) {
            $role = $admin;
        }
        else if ($id == $user_id) {
            $role = $user;
        }
        else {
            $role = $loser;
        }

        if ($arch == $noob_id) {
            $archivement = $noob;
        }
        else if ($arch == $advanced_id) {
            $archivement = $advanced;
        }
        else if ($arch == $god_id) {
            $archivement = $god;
        }
        else {
            $archivement = $loser;
        }

        if ($MESSAGE != "" && strlen($MESSAGE) <= 145) {
            $txt = "<div>" . $role . $archivement . "</div> <p style='float: left; font-weight: bolder; color: lightsalmon; font-family: \"Norwester\", sans-serif;'>" . $USERNAME . "</p> <p style='float: left; font-weight: bolder; color: darkseagreen; font-family: \"Norwester\", sans-serif;'> >> " . $MESSAGE . "</p> <br/> <br/><br/>";
            $myfile = file_put_contents('chroom.html', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
        }
    }
?>