<?php

use Livewire\Livewire;
use ProdigyPHP\Prodigy\Livewire\BlocksList;
use ProdigyPHP\Prodigy\Livewire\EditBlock;
use ProdigyPHP\Prodigy\Livewire\Editor;
use ProdigyPHP\Prodigy\Livewire\PageSettingsEditor;
use ProdigyPHP\Prodigy\Models\Page;
use ProdigyPHP\Prodigy\Models\User;
use ProdigyPHP\Prodigy\ProdigyPage;
use function Pest\Livewire\livewire;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertNotNull;
use function PHPUnit\Framework\assertNull;
use function PHPUnit\Framework\assertSame;

it('can duplicate a page', function () {
    $this->actingAs(User::factory()->create(['name' => 'Stephen', 'email' => 'stephen@bate-man.com']));
    $page = Page::factory()->create(['title' => 'Hey You', 'slug' => 'hey-you']);

    assertNull(Page::draft()->first());

    // Load the page and create a draft.
    // Drafts are automatically created when loading prodigy editor
    Livewire::withQueryParams(['pro_editing' => true])
        ->test(ProdigyPage::class, ['wildcard' => 'hey-you'])
        ->assertSet('editing', true);

    // make sure we have a draft now.
    $draft = Page::draft()->first();
    assertNotNull($draft);

    // update the draft so we know something changed.
    $draft->update(['title' => 'from draft']);
    assertSame($draft->title, Page::draft()->first()->title);

    // Add a block
    $draft->blocks()->create(['key' => 'test_key']);
    assertSame('test_key', $draft->blocks()->first()->key);

    // publish the page.
    Livewire::test(Editor::class, ['page' => $draft])
        ->emit('publishDraft', $draft->id);

    // Make sure the page we have is changed, but has the same ID.
    $published_page = Page::first();
    assertSame('from draft', $published_page->title);
    assertSame('test_key', $published_page->blocks()->first()->key);
    assertSame($page->id, $published_page->id);


});
