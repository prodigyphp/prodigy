<?php

namespace ProdigyPHP\Prodigy\BlockGroups;

class CustomBlocksGroup extends BlockGroup
{
    public string $namespace = '';

    public string $title = 'Custom';

    public function getPath(): string
    {
        return config('prodigy.custom_blocks_path', 'resources/views/components/blocks');
    }
}
