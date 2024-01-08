<?php
session_start();
session_destroy();
header("Location: /www.MyTKJ/home-page/index.php");
exit();
?>
