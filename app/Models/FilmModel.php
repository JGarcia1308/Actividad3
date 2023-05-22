<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilmModel extends Model
{
    use HasFactory;

    protected $table = 'film_list';
    protected $primaryKey = 'FID';
    protected $title = 'title';
    protected $description = 'description';
    protected $category = 'category';
    protected $price = 'price';
    protected $length = 'length';
    protected $rating = 'rating';
    protected $actors = 'actors';
}
