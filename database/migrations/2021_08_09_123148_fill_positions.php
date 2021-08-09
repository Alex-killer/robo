<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FillPositions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('positions')->insert([
            [
                'description' => 'Директор',
                'name' => 'director',
                'salary' => 400000,
                'is_active' => 1,
            ],
            [
                'description' => 'Начальник IT службы',
                'name' => 'leader_it',
                'salary' => 120000,
                'is_active' => 1,
            ],
            [
                'description' => 'Начальник HR службы',
                'name' => 'leader_hr',
                'salary' => 90000,
                'is_active' => 1,
            ],
            [
                'description' => 'Начальник отдела продаж',
                'name' => 'leader_op',
                'salary' => 85000,
                'is_active' => 1,
            ],
            [
                'description' => 'Начальник отдела обслуживания',
                'name' => 'leader_ob',
                'salary' => 55000,
                'is_active' => 1,
            ],
            [
                'description' => 'Начальник юр. отдела',
                'name' => 'leader_yo',
                'salary' => 80000,
                'is_active' => 1,
            ],
            [
                'description' => 'Начальник охраны',
                'name' => 'leader_sec',
                'salary' => 65000,
                'is_active' => 1,
            ],
            [
                'description' => 'Начальник отдела аналитики',
                'name' => 'leader_oa',
                'salary' => 70000,
                'is_active' => 1,
            ],
            [
                'description' => 'Начальник отдела разработки',
                'name' => 'leader_or',
                'salary' => 190000,
                'is_active' => 1,
            ],
            [
                'description' => 'Senior разарботчик',
                'name' => 'senior',
                'salary' => 180000,
                'is_active' => 1,
            ],
            [
                'description' => 'Middle разработчик',
                'name' => 'middle',
                'salary' => 140000,
                'is_active' => 1,
            ],
            [
                'description' => 'Junior разработчик',
                'name' => 'junior',
                'salary' => 85000,
                'is_active' => 1,
            ],
            [
                'description' => 'Специалист IT службы',
                'name' => 'spec_it',
                'salary' => 50000,
                'is_active' => 1,
            ],
            [
                'description' => 'Специалист HR службы',
                'name' => 'spec_hr',
                'salary' => 45000,
                'is_active' => 1,
            ],
            [
                'description' => 'Специалист отдела продаж',
                'name' => 'spec_op',
                'salary' => 55000,
                'is_active' => 1,
            ],
            [
                'description' => 'Специалист отдела аналитики',
                'name' => 'spec_oa',
                'salary' => 60000,
                'is_active' => 1,
            ],
            [
                'description' => 'Юрист',
                'name' => 'yurist',
                'salary' => 45000,
                'is_active' => 1,
            ],
            [
                'description' => 'Охранник',
                'name' => 'security',
                'salary' => 30000,
                'is_active' => 1,
            ],
            [
                'description' => 'Уборщик',
                'name' => 'cleaner',
                'salary' => 27000,
                'is_active' => 1,
            ],
            [
                'description' => 'Электрик',
                'name' => 'electrik',
                'salary' => 35000,
                'is_active' => 1,
            ],
            [
                'description' => 'Старший ПМ',
                'name' => 'leader_pm',
                'salary' => 100000,
                'is_active' => 1,
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
