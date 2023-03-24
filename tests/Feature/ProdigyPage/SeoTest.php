<?php

use function Pest\Livewire\livewire;
use ProdigyPHP\Prodigy\Models\Page;
use ProdigyPHP\Prodigy\ProdigyPage;

beforeEach(function() {
    $this->app['config']->set('prodigy.seo.description', 'test description');
   $this->app['config']->set('app.name', 'Test name');

   $page = Page::factory()->create(['title' => 'test', 'slug' => '/test-page', 'published_at' => now()]);
});

it('sets default title and description', function() {

   $page = Page::first();

   livewire(ProdigyPage::class, ['wildcard' => $page->slug])
       ->assertOk()
       ->assertSet('page_seo_description', 'test description')
       ->assertSet('page_seo_title', 'test – Test name');
});

it('sets custom title and description', function() {

   $page = Page::first();

   $page->content = ['seo_description' => 'custom description', 'seo_title' => 'custom title'];
   $page->update();

   livewire(ProdigyPage::class, ['wildcard' => $page->slug])
       ->assertOk()
       ->assertSet('page_seo_description', 'custom description')
       ->assertSet('page_seo_title', 'custom title – Test name');
});