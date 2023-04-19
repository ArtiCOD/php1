<?php

$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '123456',[
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);
// $query = 'CREATE TABLE `students` (
//     `id` INT NOT NULL AUTO_INCREMENT,
//     PRIMARY KEY (`id`));';
// $statement = $pdo->query($query);
// $studentName = "Иванов Иван'";
// $statement = $pdo->prepare("INSERT INTO `students` (`name`) VALUES (?)");
// $result = $statement->execute([$studentName]);
// var_dump($result);
// $statement = $pdo->query('SELECT * FROM `students` WHERE `id` = 1');
// var_dump($statement->fetch());
// $statement = $pdo->query('SELECT * FROM `students` WHERE `name` LIKE "%Иванов%"');
// while ($studentData = $statement->fetch()) {
//    echo $studentData['name']."\n";
// }
// $statement=$pdo->query('SELECT * FROM `students` WHERE `name` LIKE "%Иванов%"');
// while($statement && $studentDeata = $statement->fetch()){
//     echo $studentDeata['name'] . "\n";
// }
// $statement = $pdo->prepare('SELECT * FROM `students` WHERE `name` LIKE ?');
// $statement->execute(['%ivan%','%Иван%']);
// while ($statement && $studentData = $statement->fetch()) {
//    echo $studentData['name'] . "\n";
// }
// $statement = $pdo->prepare('SELECT * FROM `students` WHERE `id` = ?');
// $statement->execute([1]);
// $studentData = $statement->fetch(PDO::FETCH_ASSOC); // Устанавливаем режим
// print_r($studentData);

// $statement = $pdo->prepare('SELECT * FROM `students` WHERE `id` = ? ');
// $statement->execute([1]);
// $studentData = $statement->fetch();
// print_r($studentData);

// $statement = $pdo->prepare('SELECT `name` FROM `students` WHERE `name` LIKE :name');
// $statement->execute(['name' => '%Иванов%']);
// $student = $statement->fetch(PDO::FETCH_ASSOC);
// var_dump($student['name']); 


