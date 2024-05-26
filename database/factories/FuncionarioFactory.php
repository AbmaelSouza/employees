<?php

namespace Database\Factories;

use App\Models\Departamento;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Funcionario>
 */
class FuncionarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $departamento = Departamento::create([
            "nome" => $this->faker->company,
        ]);

        for ($i = 0; $i < 10; $i++) {
            \App\Models\Funcionario::create([
                "nome" => $this->faker->name,
                "email" => $this->faker->safeEmail,
                "cpf" => $this->faker->numerify('###########'),
                "idade" => $this->faker->numberBetween(18, 104),
                "departamento_id" => $departamento->id,
            ]);
        }

        // Retorne um único funcionário como exemplo
        return [
            "nome" => $this->faker->name,
            "email" => $this->faker->safeEmail,
            "cpf" => $this->faker->numerify('###########'),
            "idade" => $this->faker->numberBetween(18, 104),
            "departamento_id" => $departamento->id,
        ];
    }
}
