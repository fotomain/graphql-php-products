<?php

namespace App\Type;

use App\DB;
use App\Types;
use GraphQL\Type\Definition\ObjectType;

class QueryType extends ObjectType
{
    public function __construct()
    {
        $config=[
            'fields'=>function(){
                return [
                    'product'=> [
                        'type'=>Types::product(),
                        'description'=> 'return Product by id',
                        'resolve'=> function ($root, $args) {
                            return DB::selectOne();
                        }
                    ],
                    'allProducts'=> [
                        'type'=>Types::product(),
                        'description'=> 'return Product by id',
                        'resolve'=> function ($root, $args) {
                            return DB::select("SELECT * FROM products_table");
                        }
                    ],
                ]; //return fields
            }
        ];

        parent::__construct($config);
    }
}