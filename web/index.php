<?php
session_start();
if(isset($_SESSION['SESSID'])){
  Header("Location: dashboards/index.php");
} else {
  Header("Location: authentication/layouts/basic/sign-in.html");
}
?>
