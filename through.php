<?php
header("Content-type:application/json");
$obj=[["name"=>"box","age"=>"21"],["name"=>"box","age"=>"22"]
];
echo json_encode($obj);
