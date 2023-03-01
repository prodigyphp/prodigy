<?php

namespace ProdigyPHP\Prodigy\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use ProdigyPHP\Prodigy\Database\Factories\PageFactory;

class Taxonomy extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = 'prodigy_types';


    public function entries() : HasMany
    {
        return $this->hasMany(Entry::class);
    }

    protected static function newFactory() : PageFactory
    {
        return new PageFactory();
    }
}
