<?php
include('verificar.php');

if (session_destroy()){
    header("Location: index.html");
}
?>