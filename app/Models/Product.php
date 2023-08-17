<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'category_id', 'name', 'name_subtitle', 'keywords', 'pantry_min', 'pantry_max', 
        'pantry_metric', 'pantry_tips', 'pantry_after_opening_min', 'pantry_after_opening_max',
        'pantry_after_opening_metric', 'refrigerate_min', 'refrigerate_max', 'refrigerate_metric',
        'refrigerate_tips', 'refrigerate_after_opening_min', 'refrigerate_after_opening_max',
        'refrigerate_after_opening_metric', 'refrigerate_after_thawing_min', 'refrigerate_after_thawing_max',
        'refrigerate_after_thawing_metric', 'freeze_min', 'freeze_max', 'freeze_metric', 'freeze_tips'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function toSearchableArray() {
        return [
            'name' => $this->name,
            'name_subtitle' => $this->name_subtitle,
            'keywords' => $this->keywords,
        ];
    }
}
