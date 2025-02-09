
http://localhost:8000/graphql

http://localhost:8000

============= test2 components

{
   query: product (id:2) {
       id
       name
       components {
           id
           name
       }
   }
}


============= test1-1

{
    query: allProducts {
        id
        name
    }
}


============= test1  

echo 'init0';

DB::init($config);

$test = DB::select("SELECT * FROM products_table");
echo json_encode($test);

