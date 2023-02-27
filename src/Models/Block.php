<?php

namespace ProdigyPHP\Prodigy\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use ProdigyPHP\Prodigy\Database\Factories\BlockFactory;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Block extends Model implements HasMedia {

    use HasFactory;
    use InteractsWithMedia;

    protected $table = 'prodigy_blocks';

    protected $guarded = [];

    protected $casts = [
        'content' => 'collection',
        'meta' => 'collection'
    ];

    /**
     * Get the parent models (block or page).
     */
    public function prodigy_links(): MorphTo
    {
        return $this->morphTo();
    }

    public function parentBlock() : Block
    {
        return $this->morphedByMany(Block::class, 'prodigy_links')->first();
    }

    public function pages() : MorphToMany
    {
        return $this->morphedByMany(Page::class, 'prodigy_links');
    }

    public function children() : MorphToMany
    {
        return $this->morphToMany(Block::class, 'prodigy_links')->withPivot('column', 'order', 'id')->orderByPivot('order');
    }

    public function getIsRepeaterAttribute()
    {
        return str($this->key)->contains('prodigy::blocks.basic.repeater');
    }

    public function getTitleAttribute()
    {
        return Str::of($this->key)->afterLast('.')->replace('-', ' ')->title();
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

        $this
            ->addMediaConversion('large')
            ->width(2500)
            ->height(2500)
            ->queued();

        $this
            ->addMediaConversion('medium')
            ->width(1500)
            ->height(1500)
            ->queued();

        $this
            ->addMediaConversion('small')
           ->width(750)
            ->height(750)
            ->queued();
    }

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('prodigy_photos');
    }


}
