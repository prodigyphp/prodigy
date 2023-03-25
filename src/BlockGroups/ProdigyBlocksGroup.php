<?php

namespace ProdigyPHP\Prodigy\BlockGroups;

class ProdigyBlocksGroup extends BlockGroup
{
    public string $namespace = 'prodigy';

    public string $title = 'Standard';

    public function getPath(): string
    {
        return 'vendor/prodigyphp/prodigy/resources/views/components/blocks';
    }
}
