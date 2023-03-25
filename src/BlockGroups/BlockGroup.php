<?php

namespace ProdigyPHP\Prodigy\BlockGroups;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use ProdigyPHP\Prodigy\Contracts\ProdigyBlockGroupContract;
use Symfony\Component\Finder\SplFileInfo;

abstract class BlockGroup implements ProdigyBlockGroupContract
{
    /**
     * Is the absolute path to the package, from the root of the project.
     * For example, the standard Prodigy blocks live at
     * `vendor/prodigyphp/prodigy/resources/views/components/blocks`
     */
    public string $path;

    /**
     * This is the unique namespace for blocks. The namespace is registered by the block package in the service provider
     * as in `$this->loadViewsFrom(__DIR__.'/../resources/views', 'prodigy');`
     */
    public string $namespace;

    public string $title;

    /**
     * @var Collection
     *
     * All the files in the group (not separated by folder)
     */
    public Collection $bladeComponents;

    public function __construct()
    {
        $this->bladeComponents = $this->getBladeComponents();
        $this->path = $this->getPath();
    }

    public function getFolders(): Collection
    {
        return $this->buildFolders()
            ->map(function (Collection $folder) {
                return [
                    ...$folder,
                    'blocks' => $this->getBlocksByFolder($folder->get('slug')),
                ];
            });
    }

    public function getBlocksByFolder(string $folder_slug): Collection
    {
        return $this->bladeComponents
            ->filter(fn (SplFileInfo $component) => $component->getRelativePath() == $folder_slug)
            ->map(fn ($component) => $this->buildBlockArray($component));
    }

    protected function buildBlockArray(SplFileInfo $block): Collection
    {
        $folder = $block->getRelativePath();                                   // "media" (first folder above the file)
        $basename = $block->getBasename();                                     // "video.blade.php"
        $slug = Str::of($basename)->remove('.blade.php');               // "video"
        $title = $slug->replace('-', ' ')->title()->toString();  // "Video"

        $key = ($this->namespace) ? "{$this->namespace}::" : '';                // "prodigy::" (or nothing, if local blocks)
        $key .= 'blocks.';                                                      // "prodigy::blocks." (add hardcoded word "blocks")
        $key .= ($folder) ? "{$folder}." : '';                                  // "prodigy::blocks.cta" (add folder if we have one)
        $key .= "{$slug}";                                                       // "prodigy::blocks.cta.cta-primary" (add actual name of block)

        return collect([
            'key' => $key,
            'slug' => $slug->toString(),
            'title' => $title,
        ]);
    }

    /**
     * @return Collection<SplFileInfo>
     *     Get all the php files, but exclude YAML
     */
    public function getBladeComponents(): Collection
    {
        if (! is_dir($this->absolutePath())) {
            return collect();
        }

        return collect(File::allFiles($this->absolutePath()))
            ->filter(fn ($file) => $file->getExtension() == 'php');
    }

    protected function getDirectories(): Collection
    {
        if (! is_dir($this->absolutePath())) {
            return collect();
        }

        return collect(File::directories($this->absolutePath()));
    }

    public function buildFolders(): Collection
    {
        $directories = $this->getDirectories()
            ->map(function ($directory) {
                $slug = basename($directory); // goes from /components/blocks/group-name to 'group-name'

                return collect([
                    'slug' => $slug,
                    'title' => $this->titleFromSlug($slug),
                ]);
            });

        $directories->push(collect([
            'slug' => '',
            'title' => _('Uncategorized'),
        ]));

        return $directories;
    }

    protected function titleFromSlug($slug): string
    {
        return Str::of($slug)->replace('-', ' ')->title()->toString();
    }

    public function absolutePath(): string
    {
        return base_path($this->getPath());
    }
}
