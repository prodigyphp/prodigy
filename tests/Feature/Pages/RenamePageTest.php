<?php

use ProdigyPHP\Prodigy\Livewire\PageSettingsEditor;
use ProdigyPHP\Prodigy\Models\Page;
use ProdigyPHP\Prodigy\Models\User;
use function Pest\Livewire\livewire;
use function PHPUnit\Framework\assertEmpty;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertNull;

it('can change a page slug', function () {
    $this->actingAs(User::factory()->create(['name' => 'Stephen', 'email' => 'stephen@bate-man.com']));

    livewire(PageSettingsEditor::class)
        ->set('block.title', 'Hey You')
        ->set('block.slug', '/hey-you')
        ->call('save');

    $page = Page::first();
    assertEquals('/hey-you', $page->slug);

    livewire(PageSettingsEditor::class, ['page_id'=> $page->id])
        ->set('block.title', 'Hey You')
        ->set('block.slug', '/hey-you-with-the-smiles')
        ->call('save');

    $changedPage = Page::first();
    assertEquals('/hey-you-with-the-smiles', $changedPage->slug); // have new slug
    assertEmpty(Page::where('slug', $page->slug)->get()); // no old slug
    assertEquals(1, Page::all()->count()); // have exactly one page.

});