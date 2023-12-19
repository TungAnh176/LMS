<?php
session_start();
if(isset($_SESSION['isLogined'])){
    unset($_SESSION['isLogined']);
    unset($_SESSION['id']);  //Huy 1 bien phien cu the
    header('Location: ../../../public/index.php');
}   