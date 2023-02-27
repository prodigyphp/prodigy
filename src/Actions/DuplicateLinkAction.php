<?php

namespace ProdigyPHP\Prodigy\Actions;

use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\Link;

class DuplicateLinkAction {

    protected Link $link;

    public function __construct(int $link_id)
    {
        $this->link = Link::findOrFail($link_id);
    }

    public function execute(): void
    {
        $new_block = $this->handleDeepDuplication($this->link->block);
        $new_link = $this->link->replicate();

        $new_link->block_id = $new_block->id;
        $new_link->save();

        // @TODO handle reordering

    }

    protected function handleDeepDuplication(Block $block): Block
    {
        // global blocks don't get replicated.
        if ($block->is_global) {
            return $block;
        }

        // loading children replicates them as well

        return $this->replicateWithRelations($block);

    }

    // Taken from https://laracasts.com/discuss/channels/eloquent/deep-replication-model-relations
    public function replicateWithRelations(Block $block)
    {
        $block->load('children');
        $newBlock = $block->replicate();
        $newBlock->setRelations([]);
        $block->load('children');
        $newBlock->push();

        $replicatedBlock = static::replicateRelations($block, $newBlock);

        return $replicatedBlock->loadMissing('children');
    }

    protected static function replicateRelations($oldModel, &$newModel)
    {
        foreach ($oldModel->getRelations() as $relation => $modelCollection) {

            foreach ($modelCollection as $model) {
                $childModel = $model->replicate();
                $childModel->push();
                $childModel->setRelations([]);

                $newModel->{$relation}()->attach($childModel, ['order' => 0, 'column' => 0]); // saving whatever columns $childModel has except foreign keys relative to it's parent model. If there were any other foreign keys other than the parent model, in this case, those scenarios are not handled.

                static::replicateRelations($model, $childModel);
            }
        }

        return $newModel;
    }

}