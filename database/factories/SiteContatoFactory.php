<?php

namespace Database\Factories;

use App\SiteContato;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\SiteContato>
 */
class SiteContatoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome' =>$faker->name,
            'telefone' =>$faker->tollFreePhoneNumber,
            'email'=>$faker->unique()->email ,
            'motivo_contato' =>$faker->numberBetween(1,3),
            'mensagem' =>$faker->text(100)
        ];
    }
}
