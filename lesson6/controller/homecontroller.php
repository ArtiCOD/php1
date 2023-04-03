<?php
$pageHeader = 'Добро пожаловать в список задач';
if (isset($_GET['action']) && $_GET['action'] === 'login') {
    require_once 'view/signin.php';
    require_once 'securitycontroller.php';
    die;
}
require_once 'view/home.php';

