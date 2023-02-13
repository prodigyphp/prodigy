<?php

namespace ProdigyPHP\Prodigy\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ProdigyPHP\Prodigy\Database\Factories\PageFactory;

class Page extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = 'prodigy_pages';

    public function blocks()
    {
        return $this->belongsToMany(Block::class, 'prodigy_block_page');
    }

    protected static function newFactory() : PageFactory
    {
        return new PageFactory();
    }
}
