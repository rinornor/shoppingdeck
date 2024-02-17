<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'image', 'name', 'price', 'description', 'quantity', 'category'];



    protected function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }


    protected function category(): BelongsToMany {
        return $this->belongsToMany(Category::class);
    }

}
