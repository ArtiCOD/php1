<?php

$pdo = require 'db.php';
require_once 'model/UserProvider.php';

$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '123456');

$pdo->exec('CREATE TABLE users (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    name VARCHAR(150),
    username VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL
  )');

$user = new User('geekbrains');
$user->setName('GeekBrains PHP');

$userProvider = new UserProvider($pdo);
$userProvider->registerUser($user, 'password123');

$pdo->exec('CREATE TABLE tasks (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  descript TEXT NOT NULL,
  isDone tinyint
)');