<?php

namespace ProdigyPHP\Prodigy\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use ProdigyPHP\Prodigy\Actions\DeletePageAction;
use ProdigyPHP\Prodigy\Database\Factories\PageFactory;

class Page extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = 'prodigy_pages';

    public function blocks() : MorphToMany
    {
        return $this->children();
    }

    public function children() : MorphToMany
    {
        return $this->morphToMany(Block::class, 'prodigy_links')->withPivot( 'order', 'id')->orderByPivot('order');
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
            (new DeletePageAction())->execute($page);
        });
    }
}
