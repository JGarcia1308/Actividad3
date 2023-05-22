<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewStaffModel extends Model
{
    const CREATED_AT = NULL;
    const UPDATED_AT = 'last_update';

    use HasFactory;

    protected $table = 'staff';
    protected $first_name = 'first_name';
    protected $last_name = 'last_name';
    protected $address_id = 'address_id';
    protected $email = 'email';
    protected $store_id ='store_id';
    protected $active = 'active';
    protected $user = 'username';
    protected $pass = 'password';
}
