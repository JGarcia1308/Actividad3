<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreModel extends Model
{
    const UPDATED_AT = 'last_update';

    use HasFactory;

    protected $table = 'store';
    protected $primaryKey = 'store_id';
    protected $manager = 'manager_staff_id';
    protected $address = 'address_id';

}
