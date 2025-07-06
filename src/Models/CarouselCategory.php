<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentCarousels\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use RectitudeOpen\FilamentCarousels\Database\Factories\CarouselCategoryFactory;
use SolutionForest\FilamentTree\Concern\ModelTree;

class CarouselCategory extends Model
{
    use HasFactory;
    use ModelTree;
    use SoftDeletes;

    protected $fillable = ['title', 'parent_id', 'weight'];

    public function carousel()
    {
        return $this->belongsToMany(Carousel::class, 'pivot_carousel_categories', 'category_id', 'carousel_id');
    }

    protected static function booted()
    {
        static::forceDeleted(function ($carouselCategory) {
            $carouselCategory->carousel()->detach();
        });
    }

    protected static function newFactory()
    {
        return CarouselCategoryFactory::new();
    }
}
