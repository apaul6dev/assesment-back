<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * Product
 */
class Product extends Model
{
    /**
     * product model
     */
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'description', 'price', 'qty'];   

    use HasFactory;
}
