<?php

namespace ProdigyPHP\Prodigy\Contracts;

use Illuminate\Support\Collection;
use Symfony\Component\Finder\SplFileInfo;

interface ProdigyBlockGroupContract
{
    /**
     * @return string
     * Is the absolute path to the package, from the root of the project.
     * For example, the standard Prodigy blocks live at
     * `vendor/prodigyphp/prodigy/resources/views/components/blocks`
     */
    public function getPath(): string;

    /**
     * @return Collection<SplFileInfo>
     */
    public function getBladeComponents(): Collection;
}
