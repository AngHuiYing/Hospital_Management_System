<?php
session_start();

// 清除所有会话变量
$_SESSION = array();

// 如果使用了会话 cookie，则删除会话 cookie
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// 销毁会话
session_destroy();

// 使用绝对路径重定向到医生登录页面
header("Location: ../index.php");
exit;
?> 