<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'lms');
define('DB_USER', 'root');
define('DB_PASS', 'tunganh1706');

try {
    // Tạo đối tượng PDO để kết nối đến cơ sở dữ liệu
    function getCon()
    {
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);

        // Thiết lập chế độ lấy dữ liệu mặc định là PDO::FETCH_ASSOC
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        // Thiết lập chế độ báo lỗi để bật chế độ báo lỗi nếu có lỗi xảy ra trong quá trình thao tác với cơ sở dữ liệu
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

} catch (PDOException $e) {
    die("Kết nối thất bại: " . $e->getMessage());
}
