<?php
    function random_str($len) {
        $token = "";
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIKLMNOPQRSTUVWXYZ0123456789";
        
        for ($x = 0; $x != $len; $x = $x + 1) {
            $token = $token . $chars[rand(0, strlen($chars))];
        }       

        return $token;
    }

    function generate_token() {
        $token = "xxxxxxxxxxxx-xxxxxxxxxxxx-xxxxxxxxxxxx";
        $str1 = random_str(12);
        $str2 = random_str(12);
        $str3 = random_str(12);
        $token = $str1 . "-" . $str2 . "-" . $str3;

        return $token;
    }
?>