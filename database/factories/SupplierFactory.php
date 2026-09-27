<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supplier>
 */
class SupplierFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama_supplier' => fake()->company(),
            'no_telepon' => fake()->phoneNumber(),
            'alamat' => fake()->address(),
        ];
    }
}