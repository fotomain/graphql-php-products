<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\DB;
use App\Types;
use GraphQL\GraphQL;
use GraphQL\Type\Schema;

$config=[
    'host'=>'localhost',
    'database'=>'example_products',
    'username'=>'root',
    'password'=>''
];

echo 'init0';
DB::init($config);

$rawInput = file_get_contents('php://input');
$input = json_decode($rawInput, true);
$query = $input['query'];

// Получение переменных запроса
$variables = isset($input['variables']) ? json_decode($input['variables'], true) : null;

$schema = new Schema([
    'query'=>Types::query()
]);

$result = GraphQL::executeQuery($schema,$query,null,null,$variables);

header('Content-Type: application/json; charset=UTF-8');
echo json_encode($result);
