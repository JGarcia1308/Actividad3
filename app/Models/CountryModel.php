<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryModel extends Model
{
    const UPDATED_AT = 'last_update';
    use HasFactory;

    protected $primaryKey = 'country_id';
    protected $country = 'country';
}
