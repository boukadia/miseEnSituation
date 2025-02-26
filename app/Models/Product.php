<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
    ];
    use HasFactory;
    
    public function run(): void
{


    Product::factory()
        ->count(50)
        ->hasPosts(1)
        ->create();
}
    
}
