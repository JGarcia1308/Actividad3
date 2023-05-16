<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesByStoreModel extends Model
{
    use HasFactory;
    protected $table = 'sales_by_store';
    protected $store = 'store';
    protected $manager = 'manager';
    protected $total_sales = 'total_sales';
}
