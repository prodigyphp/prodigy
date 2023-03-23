<?php


use ProdigyPHP\Prodigy\Actions\AddBlockAction;
use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\Page;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertNotNull;

$page = null;

beforeEach(function () {
    // Login the user
    $this->loginCorrectUser();

    // Create page
    $page = Page::factory()->create(['title' => 'test', 'slug' => 'test-page']);

    // Create three blocks and attach to the page.
    $blocks = Block::factory(3)->create();
    $order = 1;
    foreach ($blocks as $block) {
        $page->children()->attach($block->id, ['order' => $order]);
        $order ++;
    }
    assertNotNull($page->children()->wherePivot('order', 3)->first());
});

test('it can insert a block into first position', function () {

    $page = Page::first();

    $blockAdder = (new AddBlockAction())->forPage($page)
        ->atPagePosition(1)
        ->intoColumn(null)
        ->atColumnPosition(1)
        ->createBlockByKey('prodigy::blocks.basic.text')
        ->execute();

    $child = $page->children->first();
    assertEquals($child->pivot->order, 1);

});

it('can insert a new block in various positions', function ($order) {
    $page = Page::first();
    assertEquals($page->children()->count(), 3); // start with three blocks.

    // Add a child block
    (new AddBlockAction())->forPage($page)
        ->atPagePosition($order)
        ->intoColumn(null)
        ->atColumnPosition(1)
        ->createBlockByKey('prodigy::blocks.basic.html')
        ->execute();

    $children = $page->children()->wherePivot('order', $order)->get();

    assertEquals($children->count(), 1); // only one is ordered "1"
    assertEquals($children->first()->key, 'prodigy::blocks.basic.html'); // we have the one we created.
    assertNotNull($page->children()->wherePivot('order', 4)->first()); // end with four blocks.

})->with([
     1, 2, 3, 4
]);

it('can move an existing block in various positions', function ($from, $to) {
    $page = Page::first();
    assertEquals($page->children()->count(), 3); // start with three blocks.
    $block_to_reorder = $page->children()->wherePivot('order', $from)->first();

    // move a child block
    (new AddBlockAction())
        ->forPage($page)
        ->atPagePosition($to)
        ->intoColumn(null)
        ->atColumnPosition(1)
        ->insertExistingBlockByLinkId($block_to_reorder->id)
        ->execute();

    $children = $page->children()->wherePivot('order', $to)->get();

//    dd($page->children()->get()->pluck('id'));

    assertEquals($children->count(), 1); // only one is ordered "1"
    assertEquals($children->first()->id, $block_to_reorder->id); // we have the one we moved in the right order.
    assertEquals($page->children()->count(), 3); // end with three blocks.

})->with([
    [3, 1], [3, 2], [2, 1], // dragging up tests
    [1, 3], [1, 2], [1, 3], [2,3] // dragging down tests.
]);