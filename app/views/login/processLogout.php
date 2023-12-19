<?php
session_start();
if(isset($_SESSION['isLogined'])){
    unset($_SESSION['isLogined']); //Huy 1 bien phien cu the
    //session_destroy(); Huy tat ca cac phien dang co
    header("Location:../../index.php");
}