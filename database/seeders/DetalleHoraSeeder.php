<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetalleHoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Horario entre semana
        for($i=13; $i<=26; $i++){
            DB::table('detalle_horas')
            ->insert(array(
                'horas_id' => $i,
                'dias_id' => 1
            ));
        }
        
        //Horario para sábados
        for($i=1; $i<=26; $i++){
            DB::table('detalle_horas')
            ->insert(array(
                'horas_id' => $i,
                'dias_id' => 2
            ));
        }

        //Horario para domingos
        for($i=11; $i<=26; $i++){
            DB::table('detalle_horas')
            ->insert(array(
                'horas_id' => $i,
                'dias_id' => 3
            ));
        }
    }
}
