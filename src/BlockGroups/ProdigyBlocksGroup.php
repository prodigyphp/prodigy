<?php

namespace ProdigyPHP\Prodigy\BlockGroups;

use ProdigyPHP\Prodigy\Contracts\ProdigyBlockGroupContract;

class ProdigyBlocksGroup extends BlockGroup {

    public string $namespace = 'prodigy';

    public string $title = 'Standard';

    public function getPath(): string
    {
        return 'vendor/prodigyphp/prodigy/resources/views/components/blocks';
    }

}