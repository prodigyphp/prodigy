<?php

namespace ProdigyPHP\Prodigy\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use ProdigyPHP\Prodigy\Actions\DeleteLinkAction;

/**
 * @property int $id
 * @property int $block_id
 * @property string $prodigy_links_type
 * @property int $prodigy_links_id
 * @property int $order
 * @property int $column
 */
class Link extends Model
{
    protected $table = 'prodigy_links';

    protected $guarded = [];

    public function prodigy_links(): MorphTo
    {
        return $this->morphTo();
    }

    public function parent(): MorphTo
    {
        return $this->prodigy_links();
    }

//    public function page() : BelongsTo
//    {
//        return $this->belongsTo(Page::class, 'page_id');
//    }

    public function block(): BelongsTo
    {
        return $this->belongsTo(Block::class);
    }

    public function child(): BelongsTo
    {
        return $this->block();
    }

    protected static function booted(): void
    {
        static::deleting(function (Link $link) {
            (new DeleteLinkAction($link))->removeBlocks();
        });
    }
}
