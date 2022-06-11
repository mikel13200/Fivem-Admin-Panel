<?php
session_start();
session_destroy();
header('Location: authentication/layouts/basic/sign-in.html');
?>