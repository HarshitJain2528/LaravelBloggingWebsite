<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $users = User::all()->pluck('id')->toArray();
        $category = Category::all()->pluck('id')->toArray();

        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'user_id' => $this->faker->randomElement($users),
            'category_id' => $this->faker->randomElement($category),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
