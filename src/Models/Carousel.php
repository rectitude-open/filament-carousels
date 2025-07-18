<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentCarousels\Models;

use Awcodes\Curator\Models\Media;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use RectitudeOpen\FilamentCarousels\Database\Factories\CarouselFactory;

/**
 * @property int $id
 * @property string $title
 * @property string $name
 * @property bool $is_published
 * @property int $display_order
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \RectitudeOpen\FilamentCarousels\Models\CarouselCategory> $categories
 * @property-read int|null $categories_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Awcodes\Curator\Models\Media> $pictures
 * @property-read int|null $pictures_count
 *
 * @method static \Illuminate\Database\Eloquent\Builder|static ordered()
 * @method static \Illuminate\Database\Eloquent\Builder|static draft()
 * @method static \Illuminate\Database\Eloquent\Builder|static published()
 * @method static \Illuminate\Database\Eloquent\Builder|static withSlug(string $slug)
 */
class Carousel extends Model
{
    use HasFactory;
    use Sluggable;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'is_published',
        'display_order',
        'created_at',
    ];

    protected $with = ['pictures'];

    public function categories()
    {
        return $this->belongsToMany(CarouselCategory::class, 'pivot_carousel_categories', 'carousel_id', 'category_id');
    }

    protected static function booted()
    {
        static::forceDeleted(function ($carousel) {
            $carousel->categories()->detach();
            $carousel->pictures()->detach();
        });
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }

    public function pictures(): BelongsToMany
    {
        return $this
            ->belongsToMany(config('curator.model', Media::class), 'pivot_carousel_media', 'carousel_id', 'media_id')
            ->withPivot('order')
            ->orderBy('order');
    }

    // @phpstan-ignore-next-line
    #[Scope]
    protected function withSlug(Builder $query, string $slug): void
    {
        $query->where('slug', $slug);
    }

    // @phpstan-ignore-next-line
    #[Scope]
    protected function published(Builder $query): void
    {
        $query->where('is_published', 1);
    }

    // @phpstan-ignore-next-line
    #[Scope]
    protected function draft(Builder $query): void
    {
        $query->where('is_published', 0);
    }

    // @phpstan-ignore-next-line
    #[Scope]
    protected function ordered(Builder $query): void
    {
        $query->orderBy('display_order', 'desc')
            ->orderBy('created_at', 'desc');
    }

    protected static function newFactory()
    {
        return CarouselFactory::new();
    }
}
