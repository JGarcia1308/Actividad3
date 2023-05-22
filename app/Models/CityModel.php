<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityModel extends Model
{
    const UPDATED_AT = 'last_update';
    use HasFactory;

    protected $primaryKey = 'city_id';
    protected $city = 'city';
    protected $country_id = 'country_id';

}
