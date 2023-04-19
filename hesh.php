<?php
$password = 123;
$heshPassword = md5($password);
$passwordNew = 123;
$heshNewPassword = md5($passwordNew);
var_dump(($heshNewPassword));
var_dump($heshPassword);