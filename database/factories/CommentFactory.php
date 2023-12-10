<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Category;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    protected $model = Comment::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = Category::all()->pluck('id')->toArray();
        $posts= Post::all()->pluck('id')->toArray();

        return [
            'post_id' => $this->faker->randomElement($posts),
            'category_id' =>$this->faker->randomElement($category),
            'comments' => $this->faker->sentence,
        ];
    }
}
