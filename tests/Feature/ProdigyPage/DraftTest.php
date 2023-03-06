<?php

use ProdigyPHP\Prodigy\Actions\GetDraftAction;
use ProdigyPHP\Prodigy\Models\Page;
use ProdigyPHP\Prodigy\Models\User;
use ProdigyPHP\Prodigy\ProdigyPage;
use function Pest\Livewire\livewire;
use function PHPUnit\Framework\assertEquals;


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

test('getting draft works', function () {
    $page = Page::create(['title' => 'Test Page', 'slug' => 'test-page']);
    $draft = (new GetDraftAction())->execute($page);

    $draft_from_database = Page::draft()->first();
    assertEquals($draft->id, $draft_from_database->id);
});

test('can publish page', function () {
    $this->actingAs(User::factory()->create(['name' => 'Stephen', 'email' => 'stephen@bate-man.com']));
    $page = Page::create(['title' => 'Test Page', 'slug' => 'test-page']);
    $draft = (new GetDraftAction())->execute($page);

    $draft_from_database = Page::draft()->first();
    assertEquals($draft->id, $draft_from_database->id);
});