<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FillDepartments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('departments')->insert([
            [
                'leader_id'=> 1,
                'name' => 'HR',
                'description' => 'HR Служба',
            ],
            [
                'leader_id'=> 2,
                'name' => 'IT',
                'description' => 'IT Служба',
            ],
            [
                'leader_id'=> 3,
                'name' => 'Development',
                'description' => 'Отдел разработки',
            ],
            [
                'leader_id'=> 4,
                'name' => 'Management',
                'description' => 'Менеджемент',
            ],
            [
                'leader_id'=> 5,
                'name' => 'Lawyers',
                'description' => 'Юристы',
            ],
            [
                'leader_id'=> 6,
                'name' => 'Analytics',
                'description' => 'Отдел аналитики',
            ],
            [
                'leader_id'=> 7,
                'name' => 'Sales',
                'description' => 'Отдел продаж',
            ],
            [
                'leader_id'=> 8,
                'name' => 'Service',
                'description' => 'Обслуживающий персонал',
            ],
            [
                'leader_id'=> 9,
                'name' => 'Security',
                'description' => 'Охрана',
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
