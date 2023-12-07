<?php
session_start();
if (isset($_SESSION['userclient'])) {
    unset($_SESSION['userclient']);
}

// Chuyển hướng về trang chính (ví dụ: index.php)
header('Location: index.php');
exit();
?>
