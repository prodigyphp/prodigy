<?php

use Livewire\Livewire;
use ProdigyPHP\Prodigy\Livewire\PageSettingsEditor;
use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\Page;
use ProdigyPHP\Prodigy\Models\User;
use ProdigyPHP\Prodigy\ProdigyPage;
use function Pest\Livewire\livewire;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertNull;

test('logged out user can view a published page', function () {
    // Assemble
    $slug = '/test-slug';
    $page = Page::factory()->create(['title' => 'test page', 'slug' => $slug, 'published_at' => now()]);

    Livewire::test(ProdigyPage::class, ['wildcard' => $slug])
        ->assertOk();
});

test('logged out user cannot view unpublished page', function () {
    // Assemble
    $slug = '/test-slug';
    $page = Page::factory()->create(['title' => 'test page', 'slug' => $slug, 'published_at' => null]);

    Livewire::test(ProdigyPage::class, ['wildcard' => $slug])
        ->assertStatus(404);
});