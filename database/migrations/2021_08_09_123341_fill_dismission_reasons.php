<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FillDismissionReasons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('dismission_reasons')->insert([
            [
                'name' => 'at_will',
                'description' => 'По собственному желанию',
            ],
            [
                'name' => 'absenteeism',
                'description' => 'Прогулы',
            ],
            [
                'name' => 'alcohol',
                'description' => 'Алкогольное опьянение',
            ],
            [
                'name' => 'drugs',
                'description' => 'Наркотическое опьянение',
            ],
            [
                'name' => 'death',
                'description' => 'Умер',
            ],
            [
                'name' => 'transfer',
                'description' => 'Перевод',
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
