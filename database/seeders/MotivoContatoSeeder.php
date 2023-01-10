<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MotivoContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MotivoContato::create(['motivo_contato' =>'Compra/Teste']);
        MotivoContato::create(['motivo_contato' =>'Sugestão']);
        MotivoContato::create(['motivo_contato' =>'Reclamação']);
        MotivoContato::create(['motivo_contato' =>'Informação']);
        MotivoContato::create(['motivo_contato' =>'Suporte Tecnico']);
    }
}
