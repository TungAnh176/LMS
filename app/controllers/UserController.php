<?php 
    class UserController {
        public function showLogin() {
            include_once APP_Root .'/app/views/login/index.php';
        }
        public function login() {
            $data = (new UserService())->loginService($_POST['username'], $_POST['password']);
            if ($data) {
                $_SESSION['isLogined'] = true;
                $_SESSION['id'] = $data['id'];
                header('location: index.php?c=course');
                exit(); // Kết thúc thực thi sau khi chuyển hướng
            }
        }

        public function logout() {
            if(isset($_SESSION['isLogined'])){
                unset($_SESSION['isLogined']);
                unset($_SESSION['id']);  //Huy 1 bien phien cu the
                header('Location: index.php');
            } 
        }
    }
?>