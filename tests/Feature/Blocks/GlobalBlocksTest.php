<?php

use function Pest\Livewire\livewire;
use function PHPUnit\Framework\assertEquals;
use ProdigyPHP\Prodigy\Actions\GetDraftAction;
use ProdigyPHP\Prodigy\Livewire\PageSettingsEditor;
use ProdigyPHP\Prodigy\Models\Page;
use ProdigyPHP\Prodigy\Models\User;

it('can use a global block as a draft without duplicating', function () {
    $this->actingAs(User::factory()->create(['name' => 'Stephen', 'email' => 'stephen@bate-man.com']));

    livewire(PageSettingsEditor::class)
        ->set('block.title', 'Hey You')
        ->set('block.slug', '/hey-you')
        ->call('save');

    $page = Page::first();
    $page->blocks()->create(['key' => 'test_key', 'is_global' => true, 'global_title' => 'Global']);
    assertEquals('Hey You', $page->title);

    // Create a draft
    $draft = (new GetDraftAction())->execute($page);

    assertEquals(1, $page->blocks()->get()->count());
});
