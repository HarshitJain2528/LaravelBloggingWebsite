<?php

namespace Database\Factories;

use Illuminate\Support\Facades\Hash;
use App\Models\Login;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Login>
 */
class LoginFactory extends Factory
{
    protected $model = Login::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => 'admin', 
            'password' => Hash::make('123'),
        ];
    }
}
