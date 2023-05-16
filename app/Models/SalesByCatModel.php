<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesByCatModel extends Model
{
    use HasFactory;
    protected $table = 'sales_by_film_category';
    protected $category = 'category';
    protected $total_sales = 'total_sales';
}
