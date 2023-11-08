<?php

namespace App\Models;

// use Attribute;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $table='categories';

    protected $fillable = [
        'name',
        'description',
    ];

    public function products() : HasMany
    {
        return $this->hasMany(Product::class);
    }

}
