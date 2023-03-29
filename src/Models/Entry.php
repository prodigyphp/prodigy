<?php

namespace ProdigyPHP\Prodigy\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Support\Collection;
use ProdigyPHP\Prodigy\Database\Factories\BlockFactory;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

/**
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property ?string $type
 * @property ?Collection $content
 * @property int $order
 * @property ?string $global_title
 */
class Entry extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $table = 'prodigy_entries';

    protected $guarded = [];

    protected $casts = [
        'content' => 'collection',
        'published_at' => 'datetime',
    ];

    public function taxonomies(): HasMany
    {
        return $this->hasMany(Taxonomy::class);
    }

    public function scopeOfType(Builder $query, string $type): void
    {
        $query->where('type', '=', $type);
    }

    protected static function newFactory(): BlockFactory
    {
        return new BlockFactory();
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Manipulations::FIT_CROP, 300, 300);
    }

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('prodigy')
            ->useDisk('prodigy');
    }

    public function children(): MorphToMany
    {
        return $this->morphToMany(Block::class, 'prodigy_links')->withPivot('column', 'order', 'id')->orderByPivot('order');
    }
}
