<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = "categories";
    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $fillable=['name'];

    // Relación con el modelo Movie
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
