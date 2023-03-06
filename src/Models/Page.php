<?php

namespace ProdigyPHP\Prodigy\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use ProdigyPHP\Prodigy\Actions\DeletePageAction;
use ProdigyPHP\Prodigy\Database\Factories\PageFactory;

class Page extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = 'prodigy_pages';

    protected $casts = [
        'published_at' => 'datetime'
    ];

    public function blocks() : MorphToMany
    {
        return $this->children();
    }

    public function children() : MorphToMany
    {
        return $this->morphToMany(Block::class, 'prodigy_links')->withPivot( 'order', 'id')->orderByPivot('order');
    }

    public function publicPage() : BelongsTo
    {
        return $this->belongsTo(Page::class, 'public_page_id');
    }

    public function draftPage() : HasOne
    {
        return $this->hasOne(Page::class, 'public_page_id');
    }

    // public pages are pages which do *not* have a public page attached.
    public function scopePublic(Builder $query)
    {
        $query->doesntHave('publicPage');
    }

    // Drafts are pages which have a public page attached.
    public function scopeDraft(Builder $query)
    {
        $query->has('publicPage');
    }

    // public pages are pages which do *not* have a public page attached.
    public function scopePublished(Builder $query)
    {
        $query->whereNotNull('published_at');
    }

    protected static function newFactory() : PageFactory
    {
        return new PageFactory();
    }

    /**
     * Handle events for Page
     * Most specifically, when deleting needs to cascade.
     */
    protected static function booted(): void
    {
        static::deleting(function (Page $page) {
            (new DeletePageAction($page))->removeBlocks();
        });
    }
}
