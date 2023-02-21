<?php

namespace ProdigyPHP\Prodigy\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
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

    // not sure where this lives.

    protected $table = 'prodigy_blocks';

    protected $guarded = [];

    protected $casts = [
        'content' => 'collection',
        'meta' => 'collection'
    ];

    public function pages()
    {
        return $this->belongsToMany(Page::class, 'prodigy_block_page');
    }

    public function getTitleAttribute()
    {
        return Str::of($this->key)->afterLast('.')->replace('-', ' ')->title();
    }

    public function children() : BelongsToMany
    {
        return $this->belongsToMany(Block::class, 'prodigy_block_row', 'row_block_id', 'block_id')->withPivot('column', 'order')->orderByPivot('order');
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
