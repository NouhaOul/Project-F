<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function panier()
    {
        return $this->belongsTo(Panier::class);
    }
}
