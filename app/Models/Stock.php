<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Services\SlugService;
use Faker\Core\Uuid;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity',
        'price',
        'sku',
        'sold',
        'in_stock',
        'image',
        'product_size_id',
        'product_color_id',
        'product_id',
    ];

    public static function boot()
    {
        parent::boot();

        static::saving(function ($stock) {
            $stock->sku = $stock->generateSku();
            if ($stock->quantity == 0) {
                $stock->in_stock = 0;
            }
        });
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function productSize()
    {
        return $this->belongsTo(ProductSize::class);
    }

    public function productColor()
    {
        return $this->belongsTo(ProductColor::class);
    }

// not woking when updating
    public function generateSku()
    {
        $product_name = Product::select('name')->find($this->product_id);
        // dd($product_name->name);
        $product_name = Str::slug($product_name->name, '-');
        $color = ProductColor::select('slug')->find($this->product_color_id);
        $size = ProductSize::select('code')->find($this->product_size_id);
        $sku = $product_name . '-' . $color->slug . '-' . strtolower($size->code); // not working this name and code
        // dd($sku);
        // Make sure SKU is unique
        if (Self::where('sku', $sku)->exists()) {
            $sku = $sku.'-'.uniqid(); // generate random SKU
        }
        return $sku;
    }
}
