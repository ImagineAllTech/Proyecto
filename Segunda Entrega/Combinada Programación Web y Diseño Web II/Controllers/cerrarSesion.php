<?php

session_start();
session_destroy();
header("location: ../Views/views/login/login.php");

?>