<?php

namespace ProdigyPHP\Prodigy\Actions;

use Illuminate\Support\Facades\DB;
use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\Page;

class CreateWelcomePageAction {

    public function execute($slug): Page
    {
        return DB::transaction(function () use ($slug) {
            $page = Page::create(['title' => 'Home', 'slug' => "{$slug}"]);
            $block = Block::create([
                'key' => 'blocks.welcome.welcome',
                'content' => [
                    'title' => 'Welcome to Prodigy!',
                    'subtitle' => 'Thanks for checking out Prodigy! This text is managed by the CMS, so delete this block and start making something great.',
                    'show_on_page' => 'show',
                    'padding_left' => 0,
                    'padding_top' => 0,
                    'padding_right' => 0,
                    'padding_bottom' => 0
                ]
            ]);

            $page->children()->attach($block->id, ['order' => 1]);

            return $page;
        });
    }

}