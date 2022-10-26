<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ModelEstacionamento;

class EstacionamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelEstacionamento $carro)
    {
        $carro->create([
            'placa'=>'ABC123',
            'modelo'=>'CORSA',
            'id_user'=>'1',
            'date'=>'2022-10-26 00:00:00',
            'time'=>'10:28:00',
        ]);
        $carro->create([
            'placa'=>'DEF456',
            'modelo'=>'PRISMA',
            'id_user'=>'1',
            'date'=>'2022-10-26 00:00:00',
            'time'=>'10:28:00',
        ]);
        $carro->create([
            'placa'=>'GHI789',
            'modelo'=>'GOL',
            'id_user'=>'1',
            'date'=>'2022-10-26 00:00:00',
            'time'=>'10:28:00',
        ]);
        $carro->create([
            'placa'=>'JDK123',
            'modelo'=>'FERRARI',
            'id_user'=>'1',
            'date'=>'2022-10-26 00:00:00',
            'time'=>'10:28:00',
        ]);
        $carro->create([
            'placa'=>'LMN456',
            'modelo'=>'MOBI',
            'id_user'=>'1',
            'date'=>'2022-10-26 00:00:00',
            'time'=>'10:28:00',
        ]);
        $carro->create([
            'placa'=>'MNO789',
            'modelo'=>'UP',
            'id_user'=>'1',
            'date'=>'2022-10-26 00:00:00',
            'time'=>'10:28:00',
        ]);
        $carro->create([
            'placa'=>'PQR123',
            'modelo'=>'CRUZE',
            'id_user'=>'1',
            'date'=>'2022-10-26 00:00:00',
            'time'=>'10:28:00',
        ]);
        $carro->create([
            'placa'=>'STU456',
            'modelo'=>'HILLUX',
            'id_user'=>'1',
            'date'=>'2022-10-26 00:00:00',
            'time'=>'10:28:00',
        ]);
        $carro->create([
            'placa'=>'VWX789',
            'modelo'=>'GOLF',
            'id_user'=>'1',
            'date'=>'2022-10-26 00:00:00',
            'time'=>'10:28:00',
        ]);
    }
}
