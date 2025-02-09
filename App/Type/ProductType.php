<?php

namespace App\Type;

use App\Types;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

class ProductType extends ObjectType
{
    public function __construct()
    {
        $config=[
            'description'=>'Product object',
            'fields'=>function (){
                return[
                  'id'=>[
                      'type'=> Types::string(),
                      'description'=> 'Product identifier',
                  ],
                  'name'=>[
                      'type'=> Types::string(),
                      'description'=> 'Product name',
                  ],
                  'price'=>[
                      'type'=> Types::int(),
                      'description'=> 'Product price',
                  ],

                ];
            },
        ];

        parent::__construct($config);
    }
}

