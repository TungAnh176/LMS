<?php 
    class UserService {
        private $conn;

        public function __construct() {
            $this->conn = (new Database())->getConnection();
        }

        public function loginService($username, $password) {
            $sql = "SELECT id, password FROM users WHERE (name = :username OR email = :username)";
            try {
                $stmt = $this->conn->prepare($sql);
                $stmt->bindParam(':username', $username);
                $stmt->execute();
                if ($stmt->rowCount() > 0) {
                    $row = $stmt->fetch();
                    $pass_saved = $row['password'];
                    if (password_verify($password, $pass_saved)) {
                        return $row;
                    }
                    return [];
                }
                return [];
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }

?>