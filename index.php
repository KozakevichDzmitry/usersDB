<?php
require_once('./dbinfo.php');
require_once('./DB.php');
require_once('./User.php');
require_once('./Users.php');
$userInfo1 = [
    'name'      => 'Дима',
    'surname'   => 'Козакевич',
    'birthdate' => '02.04.1991',
    'gender'    => 1,
    'city'      => 'Minsk'
];
$userInfo2 = [
    'name'      => 'Dima',
    'surname'   => 'Kozakevich',
    'birthdate' => '02.04.1995',
    'gender'    => 1,
    'city'      => 'Minsk'
];
$userInfo3= [
    'name'      => 'Lily',
    'surname'   => 'Smith',
    'birthdate' => '02.04.2000',
    'gender'    => 0,
    'city'      => 'Akron'
];
$db = new DB(dbinfo());
$user = new User($db, $userInfo1);
$user = new User($db, $userInfo2);
$user = new User($db, $userInfo3);
//$user->delete();
//print_r($user->format());
$users = new Users($db, ['gender' => 1, 'birthdate' => '02.04.1991',], ['birthdate' => '>=']);
//print_r($users->getIds());
//print_r($users->getArrayUsers());
//$users->deleteAll();