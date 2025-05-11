<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$users = [
    ["id" => 1, "name" => "Arun", "age" => 22],
    ["id" => 2, "name" => "Dharaneesh", "age" => 25],
    ["id" => 3, "name" => "Nandha", "age" => 28],
    ["id" => 4, "name" => "Madhav", "age" => 27]
];

echo json_encode($users);
?>