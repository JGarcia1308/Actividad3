<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewFilmModel extends Model
{
    const UPDATED_AT = 'last_update';
    const CREATED_AT = NULL;

    use HasFactory;
    protected $table = 'film';
    protected $title = 'title';
    protected $description = 'description';
    protected $release_year = 'release_year';
    protected $language = 'language_id';
    protected $original_lang = 'original_language_id';
    protected $length = 'length';
    protected $specials = 'special_features';
}
