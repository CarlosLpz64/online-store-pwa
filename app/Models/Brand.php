<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table = "brands";
    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $fillable=['name', 'description', 'logo_path'];

    // Relación con el modelo Movie
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
