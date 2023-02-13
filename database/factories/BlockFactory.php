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
            'key' => 'blocks.header',
            'content' => '{"title": "What is the answer to life?", "subtitle": "42"}'
        ];
    }
}
