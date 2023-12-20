<?php 
    class LessonService {
        private $conn;
        private $userID;

        public function __construct() {
            $this->conn = (new Database())->getConnection();
            $this->userID = $_SESSION['id'];
        }

        public function getAll(){
            $sql = "SELECT courses.title, lessons.title, lessons.description
            FROM users
            JOIN course_user ON users.id = course_user.user_id
            JOIN lessons ON course_user.course_id = lessons.course_id
            JOIN courses ON lessons.course_id = courses.id
            WHERE users.id = '$this->userID'";

            try {
                $stmt = $this->conn->prepare($sql);
                $stmt->execute();
                $lessons = $stmt->fetchAll();
                return $lessons;
            } catch (PDOException $e) {
                $courses =  [];
            }
        }

    
        
    }
?>