<?php

use Livewire\Livewire;
use function Pest\Livewire\livewire;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertNull;
use ProdigyPHP\Prodigy\Livewire\Editor;
use ProdigyPHP\Prodigy\Models\Page;
use ProdigyPHP\Prodigy\Models\User;
use ProdigyPHP\Prodigy\ProdigyPage;

it('can delete a page', function () {
    $this->actingAs(User::factory()->create(['name' => 'Stephen', 'email' => 'stephen@bate-man.com']));

    $page = Page::factory()->create(['title' => 'Hey You', 'slug' => '/hey-you']);
    assertEquals($page->title, Page::first()->title);

    // Bring in a draft
    Livewire::withQueryParams(['pro_editing' => true])
      ->test(ProdigyPage::class, ['wildcard' => '/hey-you'])
      ->assertSet('editing', true)
      ->assertSee('Publish');

    // Delete the page
    livewire(Editor::class)
        ->call('deletePage', $page->id);

    assertNull(Page::first());
});

it('cannot delete a page with the wrong user', function () {
    $this->actingAs(User::factory()->create(['name' => 'Stephen', 'email' => 'wrong@example.com']));

    $page = Page::factory()->create(['title' => 'Hey You', 'slug' => 'hey-you']);
    assertEquals($page->title, Page::first()->title);

    livewire(Editor::class)
        ->call('deletePage', $page->id);

    assertEquals($page->title, Page::first()->title);
});

it('cannot delete a page with no user', function () {
    $page = Page::factory()->create(['title' => 'Hey You', 'slug' => 'hey-you']);
    assertEquals($page->title, Page::first()->title);

    livewire(Editor::class)
        ->call('deletePage', $page->id);

    assertEquals($page->title, Page::first()->title);
});
