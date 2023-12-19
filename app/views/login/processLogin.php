<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    include_once('../../config/config.php');
    try {
        $conn = getCon();
        $sql = "SELECT * FROM users WHERE (name = '$username' OR email = '$username')";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0 ){
            $row = $stmt->fetch();
            $pass_saved = $row['password'];
            if(password_verify($password, $pass_saved)){
                session_start();
                $_SESSION['isLogined'] = true;
                $_SESSION['id'] = $row['id'];
                header("Location:../course/index.php");
            }
            else{
                $error = "Password invalid";
                header("Location:login.php?error=$error");
            }
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
