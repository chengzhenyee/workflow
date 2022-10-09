<?php

namespace Database\Factories;

use App\Models\BoardList;
use App\Models\BoardListCard;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BoardListCard>
 */
class BoardListCardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BoardListCard::class;


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'board_list_id' => BoardList::factory(),
            'title' => $this->faker->unique()->company(),
            'description' => $this->faker->realText(),
        ];
    }
}
