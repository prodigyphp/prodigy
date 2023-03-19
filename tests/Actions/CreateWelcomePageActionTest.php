<?php

namespace ProdigyPHP\Prodigy\Tests\Actions;

use Livewire\Livewire;
use ProdigyPHP\Prodigy\Actions\CreateWelcomePageAction;
use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\Page;
use ProdigyPHP\Prodigy\Models\User;
use ProdigyPHP\Prodigy\ProdigyPage;
use function Pest\Laravel\get;
use function Pest\Livewire\livewire;
use function PHPUnit\Framework\assertContains;
use function PHPUnit\Framework\assertNull;

beforeEach(function () {
    $this->action = new CreateWelcomePageAction();
});

test('system doesn\'t create welcome page when visiting pages other than home', function () {
     // Arrange
    $this->actingAs(User::factory()->create(['name' => 'Stephen', 'email' => 'stephen@bate-man.com']));
    $slug = '/welcome-slug';
    Page::truncate(); // Ensure there are no pages before the test.

    // Act
    livewire(ProdigyPage::class, ['wildcard' => $slug]);

    // Assert
    assertNull(Page::first());
});

test('system creates welcome page when visiting home', function () {
     // Arrange
    $this->actingAs(User::factory()->create(['name' => 'Stephen', 'email' => 'stephen@bate-man.com']));
    $slug = '/';
    Page::truncate(); // Ensure there are no pages before the test.

    // Act
    Livewire::test(ProdigyPage::class, ['wildcard' => $slug]);

    $page = Page::first();

    // Assert
    $this->assertInstanceOf(Page::class, $page);
    $this->assertEquals($slug, $page->slug);

    $block = Block::find($page->children->first()->id);

    $this->assertInstanceOf(Block::class, $block);
    $this->assertEquals('blocks.welcome.welcome', $block->key);

    $this->assertEquals(1, $page->children->first()->pivot->order);
});