<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    use HasFactory;
    protected $table = 'customer_list';
    protected $ID = 'ID';
    protected $name = 'name';
    protected $address = 'address';
    protected $zip_code = 'zip code';
    protected $phone = 'phone';
    protected $city = 'city';
    protected $country = 'country';
    protected $notes = 'notes';
    protected $SID = 'SID';
}
