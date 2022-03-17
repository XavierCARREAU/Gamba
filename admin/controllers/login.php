<?php
    if(isset($_POST["login"]) && isset($_POST["password"])){
        $users = spe("user","login_user",$_POST["login"]);
        if(isset($users[0])){
            if($users[0]["mdp_user"] == md5($_POST["password"])){
                $_SESSION["admin"] = 1;
            }
        }
        header("Location:".$_SERVER["REQUEST_URI"]);
    }
    
    require("views/login.php");
?>