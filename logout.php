<?php
//Session Starting & Destoying
session_start();
session_destroy();
//Location to ensure safe Login.
header("location:index.php");

?>