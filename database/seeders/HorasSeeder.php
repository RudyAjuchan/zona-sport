<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\horas;
use Illuminate\Support\Facades\DB;

class HorasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('horas')
        ->insert(array(
            'nombre' => "8:00-8:30am",
            'h_inicio' => "8:00",
            'h_fin' => "8:30",
        ));
        
        DB::table('horas')
        ->insert(array(
            'nombre' => "8:30-9:00am",
            'h_inicio' => "8:30",
            'h_fin' => "9:00",
        ));

        DB::table('horas')
        ->insert(array(
            'nombre' => "9:00-9:30am",
            'h_inicio' => "9:00",
            'h_fin' => "9:30",
        ));
        
        DB::table('horas')
        ->insert(array(
            'nombre' => "9:30-10:00am",
            'h_inicio' => "9:30",
            'h_fin' => "10:00",
        ));

        DB::table('horas')
        ->insert(array(
            'nombre' => "10:00-10:30am",
            'h_inicio' => "10:00",
            'h_fin' => "10:30",
        ));
        
        DB::table('horas')
        ->insert(array(
            'nombre' => "10:30-11:00am",
            'h_inicio' => "10:30",
            'h_fin' => "11:00",
        ));

        DB::table('horas')
        ->insert(array(
            'nombre' => "11:00-11:30am",
            'h_inicio' => "11:00",
            'h_fin' => "11:30",
        ));
        
        DB::table('horas')
        ->insert(array(
            'nombre' => "11:30-12:00pm",
            'h_inicio' => "11:30",
            'h_fin' => "12:00",
        ));

        DB::table('horas')
        ->insert(array(
            'nombre' => "12:00-12:30pm",
            'h_inicio' => "12:00",
            'h_fin' => "12:30",
        ));
        
        DB::table('horas')
        ->insert(array(
            'nombre' => "12:30-1:00pm",
            'h_inicio' => "12:30",
            'h_fin' => "13:00",
        ));

        DB::table('horas')
        ->insert(array(
            'nombre' => "1:00-1:30pm",
            'h_inicio' => "13:00",
            'h_fin' => "13:30",
        ));
        
        DB::table('horas')
        ->insert(array(
            'nombre' => "1:30-2:00pm",
            'h_inicio' => "13:30",
            'h_fin' => "14:00",
        ));

        DB::table('horas')
        ->insert(array(
            'nombre' => "2:00-2:30pm",
            'h_inicio' => "14:00",
            'h_fin' => "14:30",
        ));
        DB::table('horas')
        ->insert(array(
            'nombre' => "2:30-3:00pm",
            'h_inicio' => "14:30",
            'h_fin' => "15:00",
        ));

        DB::table('horas')
        ->insert(array(
            'nombre' => "3:00-3:30pm",
            'h_inicio' => "15:00",
            'h_fin' => "15:30",
        ));
        DB::table('horas')
        ->insert(array(
            'nombre' => "3:30-4:00pm",
            'h_inicio' => "15:30",
            'h_fin' => "16:00",
        ));

        DB::table('horas')
        ->insert(array(
            'nombre' => "4:00-4:30pm",
            'h_inicio' => "16:00",
            'h_fin' => "16:30",
        ));
        DB::table('horas')
        ->insert(array(
            'nombre' => "4:30-5:00pm",
            'h_inicio' => "16:30",
            'h_fin' => "17:00",
        ));

        DB::table('horas')
        ->insert(array(
            'nombre' => "5:00-5:30pm",
            'h_inicio' => "17:00",
            'h_fin' => "17:30",
        ));
        DB::table('horas')
        ->insert(array(
            'nombre' => "5:30-6:00pm",
            'h_inicio' => "17:30",
            'h_fin' => "18:00",
        ));

        DB::table('horas')
        ->insert(array(
            'nombre' => "6:00-6:30pm",
            'h_inicio' => "18:00",
            'h_fin' => "18:30",
        ));

        DB::table('horas')
        ->insert(array(
            'nombre' => "6:30-7:00pm",
            'h_inicio' => "18:30",
            'h_fin' => "19:00",
        ));

        DB::table('horas')
        ->insert(array(
            'nombre' => "7:00-7:30pm",
            'h_inicio' => "19:00",
            'h_fin' => "19:30",
        ));

        DB::table('horas')
        ->insert(array(
            'nombre' => "7:30-8:00pm",
            'h_inicio' => "19:30",
            'h_fin' => "20:00",
        ));

        DB::table('horas')
        ->insert(array(
            'nombre' => "8:00-8:30pm",
            'h_inicio' => "20:00",
            'h_fin' => "20:30",
        ));

        DB::table('horas')
        ->insert(array(
            'nombre' => "8:30-9:00pm",
            'h_inicio' => "20:30",
            'h_fin' => "21:00",
        ));
    }
}
