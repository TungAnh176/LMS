<?php
// session_start();
if (isset($_SESSION['isLogined']) && $_SESSION['isLogined']) {
    //Lấy id từ session
    global $id;
    $id = $_SESSION['id'];
    class Course
    {
        public static function getALL()
        {
            $conn = getCon();
            $id = $_SESSION['id'];
            $sql = "SELECT c.id, c.title, c.description
                FROM courses c
                JOIN course_user cu ON c.id = cu.course_id
                WHERE cu.user_id = '$id'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }
    }
} else {
    // Người dùng chưa đăng nhập, có thể chuyển hướng hoặc xử lý theo cách khác tùy thuộc vào yêu cầu của bạn.
    echo "User not logged in.";
}