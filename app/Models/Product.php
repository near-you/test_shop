<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = ['scu', 'category_id', 'title', 'description', 'price', 'quantity'];

    public static function createIfNotExist(int $scu, int $category_id, string $title, string $description, float $price, int $quantity)
    {
        return Product::query()->create(
            [
                'scu' => $scu,
                'category_id' => $category_id,
                'title' => $title,
                'description' => $description,
                'price' => $price,
                'quantity' => $quantity
            ]
        );
    }
    /*public static function updateOneOrMore(int $scu, int $category_id, string $title, string $description, float $price, int $quantity)
    {

    }*/
}
