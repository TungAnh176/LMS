<?php 
    class CourseService {
        private $conn;
        private $userID;

        public function __construct() {
            $this->conn = (new Database())->getConnection();
            $this->userID = $_SESSION['id'];
        }

        public function getAll(){
            $sql = "SELECT c.id, c.title, c.description
                FROM courses c
                JOIN course_user cu ON c.id = cu.course_id
                WHERE cu.user_id = '$this->userID'";

            try {
                $stmt = $this->conn->prepare($sql);
                $stmt->execute();
                $courses = $stmt->fetchAll();
                return $courses;
            } catch (PDOException $e) {
                $courses =  [];
            }
        }

    
        
    }
?>