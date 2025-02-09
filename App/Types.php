<?php

namespace App;

use App\Type\ProductType;
use GraphQL\Type\Definition\Type;

class Types
{

    private static $auery;
    private static $mutation;
    private static $product;
    private static $inputProduct;

    public static function product()
    {
        return self::$product?:(self::$product=new ProductType());
    }

    public static function int()
    {
        return Type::int();
    }

    public static function string()
    {
        return Type::string();
    }

}

