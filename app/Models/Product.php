<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'short_desc', 'description', 'image'];

    protected $casts = [
        "image" => "array"
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public static function searching($columns = [], $query)
    {
        return self::where(function ($queryBuilder) use ($columns, $query) {
            foreach ($columns as $column) {
                $queryBuilder->orWhere($column, 'LIKE', '%' . $query . '%');
            }
        })->get();
    }
}
