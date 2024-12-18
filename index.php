<?php

session_start();

require_once 'config.php';
require_once 'vendor/autoload.php';

use App\Models\Log;

require_once 'routes/web.php';

$log = new Log;
if (isset($_SESSION['user_name'])) {
    $username = $_SESSION['user_name'];
} else {
    $username = 'guest';
}
if (isset($_SESSION['privilege_id']) && $_SESSION['privilege_id'] == 1) {
    $username = $_SESSION['user_name']; 
}

$page = $_SERVER['REQUEST_URI'];
$ipAddress = $_SERVER['REMOTE_ADDR'];
$log->insert([
    'username' => $username,
    'ip_address' => $ipAddress,
    'page' => $page
]);
