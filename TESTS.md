
http://localhost:8000/graphql

http://localhost:8000

============= test2

============= test1  

echo 'init0';

DB::init($config);

$test = DB::select("SELECT * FROM products_table");
echo json_encode($test);

