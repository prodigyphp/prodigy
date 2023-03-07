<?php

namespace ProdigyPHP\Prodigy\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use ProdigyPHP\Prodigy\Actions\DeleteLinkAction;
use ProdigyPHP\Prodigy\Database\Factories\BlockFactory;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Link extends Model {

    protected $table = 'prodigy_links';

    protected $guarded = [];

    public function prodigy_links(): MorphTo
    {
        return $this->morphTo();
    }

    public function parent() : MorphTo
    {
        return $this->prodigy_links();
    }

//    public function page() : BelongsTo
//    {
//        return $this->belongsTo(Page::class, 'page_id');
//    }

    public function block() : BelongsTo
    {
        return $this->belongsTo(Block::class);
    }

    public function child() : BelongsTo
    {
        return $this->block();
    }

    protected static function booted(): void
    {
        static::deleting(function (Link $link) {
            (new DeleteLinkAction($link))->removeBlocks();
        });

        static::replicating(function (Link $link) {
            dd("@TODO Replicate Links");
//            (new DeletePageAction($page))->removeBlocks();
        });
    }


}
