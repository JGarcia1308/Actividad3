<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewCustomerModel extends Model
{
    const CREATED_AT = 'create_date';
    const UPDATED_AT = 'last_update';

    use HasFactory;
    protected $table = 'customer';
    protected $store_id = 'store_id';
    protected $first_name = 'first_name';
    protected $last_name = 'last_name';
    protected $email = 'email';
    protected $address_id = 'address_id';
    protected $active = 'active';

}
