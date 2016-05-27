<?php

require 'nspl/autoload.php';

use nspl\f;
use nspl\op;
use nspl\a;

$users = [
    ['first_name' => 'Max', 'last_name' => 'Gopey', 'company' => 'CGI'],
    ['first_name' => 'Bob', 'last_name' => 'Doe', 'company' => 'Google'],
    ['first_name' => 'Alice', 'last_name' => 'Doe', 'company' => 'Google'],
];

$startsWith = function ($string, $substing) {
    return stripos($string, $substing) === 0;
};
$contains = function($string, $substing) {
    return stripos($string, $substing) !== false;
};
$getFullName = function ($firstName, $lastName) {
    return $lastName . ', ' . $firstName;
};

$startsWithD = f\rpartial($startsWith, 'd');
$isBob = f\rpartial($contains, 'bob');
$getFullNameFromUser = function ($user) use ($getFullName) {
    return $getFullName($user['first_name'], $user['last_name']);
};
$getStackKey = function($name) use ($isBob) {
    return $isBob($name) ? 'bobs' : 'alices';
};
$putToCorrectStack = function($stacks, $value) use ($getStackKey) {
    $stacks[$getStackKey($value)][] = $value;
    return $stacks;
};

$getBobsAndAlicesWithD = function ($users) use ($startsWithD, $getFullNameFromUser, $putToCorrectStack) {
    return f\pipe(
        $users,
        f\partial(a\map, $getFullNameFromUser),
        f\partial(a\filter, $startsWithD),
        f\ppartial(a\reduce, [0 => $putToCorrectStack, 2 => ['bobs' => [], 'alices' => []]])
    );
};

print_r($getBobsAndAlicesWithD($users));