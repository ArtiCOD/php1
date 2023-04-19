<?php
require_once 'model/userprovider.php';
$pdo = require 'db.php';

$error = null;
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    require_once 'index.php';
    die;
}
if (isset($_POST['username'], $_POST['password'])) {
    ['username' => $username, 'password' => $password] = $_POST;
    $userProvider = new UserProvider();
    $user = $userProvider->getByUsernameAndPassword($username, $password);

    if ($user === null) {
        $error = 'Пользователь с указанными учетными данными не найден';
    } else {
        $_SESSION['user'] = $user;
    }
}

if (isset($_SESSION['user'])) {
    require_once 'view/todo.php';
    die;
}

require_once 'view/signin.php';

