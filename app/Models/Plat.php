<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plat extends Model

{
    use HasFactory;
    protected $table = 'plats';


    protected $fillable = ['name', 'description', 'image_plats', 'price', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function paniers()
    {
        return $this->belongsToMany(Panier::class);
    }
}
