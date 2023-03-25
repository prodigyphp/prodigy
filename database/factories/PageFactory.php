<?php

namespace ProdigyPHP\Prodigy\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use ProdigyPHP\Prodigy\Models\Page;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\ProdigyPHP\Prodigy\Models\Page>
 */
class PageFactory extends Factory
{
    protected $model = Page::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = fake()->jobTitle;

        return [
            'title' => $title,
            'slug' => Str::of($title)->slug,
        ];
    }
}
