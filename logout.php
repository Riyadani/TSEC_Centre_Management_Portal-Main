<?php
session_unset();
session_destroy();
header("location:home.php");
exit();
?>