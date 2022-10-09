<?php

namespace Database\Factories;

use App\Models\Board;
use App\Models\BoardList;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BoardList>
 */
class BoardListFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BoardList::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'board_id' => Board::factory(),
            'title' => $this->faker->word(),
            'description' => $this->faker->realText(),
        ];
    }
}
