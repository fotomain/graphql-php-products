<?php

include './App/DB.php';

use App\DB;

$config=[
    'host'=>'localhost',
    'database'=>'example_products',
    'username'=>'root',
    'password'=>''
];

echo 'init0';


DB::init($config);

$test = DB::select("SELECT * FROM products_table");
echo json_encode($test);

