<?php

use Livewire\Livewire;
use function PHPUnit\Framework\assertNull;
use function PHPUnit\Framework\assertSame;
use ProdigyPHP\Prodigy\Livewire\Editor;
use ProdigyPHP\Prodigy\Models\Page;
use ProdigyPHP\Prodigy\Models\User;
use ProdigyPHP\Prodigy\ProdigyPage;

it('can discard a draft', function () {
    $this->actingAs(User::factory()->create(['name' => 'Stephen', 'email' => 'stephen@bate-man.com']));

    // Create a page.
    $page = Page::factory()->create(['title' => 'Hey You', 'slug' => '/hey-you']);

    // Edit to trigger creation of a draft.
    Livewire::withQueryParams(['pro_editing' => true])
        ->test(ProdigyPage::class, ['wildcard' => '/hey-you'])
        ->assertSet('editing', true);

    // Confirm we have a draft in the database.
    $draft = $page->draftPage()->first();
    assertSame('/hey-you', $draft->slug);

    // Discard the draft.
    Livewire::test(Editor::class, ['page' => $draft])
        ->emit('deleteDraft', $draft->id);

    // The event is gone.
    assertNull($page->draftPage()->first());
});
