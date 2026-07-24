<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'category_id',
        'code',
        'name',
        'stock',
        'condition',
        'location',
        'entry_date',
        'description',
    ];

    protected $casts = [
        'entry_date' => 'date',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
