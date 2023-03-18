<?php

namespace ProdigyPHP\Prodigy\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use ProdigyPHP\Prodigy\Database\Factories\BlockFactory;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Entry extends Model implements HasMedia {

    use HasFactory;
    use InteractsWithMedia;

    protected $table = 'prodigy_entries';

    protected $guarded = [];

    protected $casts = [
        'content' => 'collection'
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
            ->addMediaCollection('prodigy');
    }


}
