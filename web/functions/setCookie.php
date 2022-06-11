<?php
session_start();
if(isset($_GET['cookie'])){
    if(isset($_GET['redirect'])){
        $redirectUrl = $_GET['redirect'];
        $cookie = $_GET['cookie'];
        $_SESSION['SESSID'] = $cookie;
        echo $redirectUrl;
        Header("Location: $redirectUrl");
    } else {
        $cookie = $_GET['cookie'];
        $_SESSION['SESSID'] = $cookie;
    }
}
?>