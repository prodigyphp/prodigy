<?php

namespace ProdigyPHP\Prodigy\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use ProdigyPHP\Prodigy\Database\Factories\BlockFactory;

class Block extends Model {

    use HasFactory;

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

    protected static function newFactory() : BlockFactory
    {
        return new BlockFactory();
    }


}
