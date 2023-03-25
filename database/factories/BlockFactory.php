<?php

namespace ProdigyPHP\Prodigy\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use ProdigyPHP\Prodigy\Models\Block;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\ProdigyPHP\Prodigy\Models\Block>
 */
class BlockFactory extends Factory
{
    protected $model = Block::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'key' => 'prodigy::blocks.basic.text',
            'content' => '{"text": '.$this->faker->sentence.', "show_on_page": "show"}',
        ];
    }
}
