<?php

use ProdigyPHP\Prodigy\Models\Page;
use ProdigyPHP\Prodigy\Models\User;
use ProdigyPHP\Prodigy\ProdigyPage;
use function Pest\Livewire\livewire;


test('visitors cannot see unpublished pages', function () {
    $page = Page::create(['title' => 'Test Page', 'slug' => 'test-page']);

    livewire(ProdigyPage::class, ['wildcard' => 'test-page'])
        ->assertStatus(404);
});

test('visitors can see published pages', function () {
    $page = Page::create(['title' => 'Test Page', 'slug' => 'test-page']);

    $page->published_at = now();
    $page->save();

    livewire(ProdigyPage::class, ['wildcard' => 'test-page'])
        ->assertOk()
        ->assertSee("prodigy-page-root");
});

test('users can see unpublished pages', function () {
    $this->actingAs(User::factory()->create(['name' => 'Stephen', 'email' => 'stephen@bate-man.com']));
    $page = Page::create(['title' => 'Test Page', 'slug' => 'test-page']);

    livewire(ProdigyPage::class, ['wildcard' => 'test-page'])
        ->assertOk();
});