<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tarea;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tarea>
 */
class TareaFactory extends Factory

{
    use HasFactory;
    protected $model = Tarea::class; 

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->sentence(),
            'descripcion' => $this->faker->paragraph(), 
            'estado' => $this->faker->randomElement(['pendiente', 'completada']),
            'fecha_cumplimiento' => $this->faker->dateTimeBetween('now', '+1 month'),
        ];
    }
}
