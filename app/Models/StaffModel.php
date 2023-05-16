<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffModel extends Model
{
    use HasFactory;

    protected $table = 'staff_list';
    protected $primaryKey = 'ID';
    protected $name = 'name';
    protected $address = 'address';
    protected $zip_code = 'zip code';
    protected $phone = 'phone';
    protected $city = 'city';
    protected $country = 'country';
    protected $SID = 'SID';
    public $timestamps = false;
}
