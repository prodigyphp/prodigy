<?php

use ProdigyPHP\Prodigy\Livewire\PageSettingsEditor;
use ProdigyPHP\Prodigy\Models\Page;
use ProdigyPHP\Prodigy\Models\User;
use function Pest\Livewire\livewire;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertNull;

it('can create a page', function () {
    $this->actingAs(User::factory()->create(['name' => 'Stephen', 'email' => 'stephen@bate-man.com']));

    livewire(PageSettingsEditor::class)
        ->set('block.title', 'Hey You')
        ->set('block.slug', '/hey-you')
        ->call('save');

    $page = Page::first();

    assertEquals('Hey You', $page->title);

});

it('cannot create a with the wrong user', function () {
    $this->actingAs(User::factory()->create(['name' => 'Stephen', 'email' => 'wrong@example.com']));

    livewire(PageSettingsEditor::class)
        ->set('block.title', 'Hey You')
        ->set('block.slug', '/hey-you')
        ->call('save');

    $page = Page::first();

    assertNull($page);

});

it('cannot create a page with no user', function () {
    livewire(PageSettingsEditor::class)
        ->set('block.title', 'Hey You')
        ->set('block.slug', '/hey-you')
        ->call('save')
        ->assertForbidden();

    $page = Page::first();

    assertNull($page);

});