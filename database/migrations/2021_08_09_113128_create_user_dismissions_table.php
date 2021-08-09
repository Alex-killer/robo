<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDismissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_dismissions', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('reason_id')->nullable();
            $table->boolean('is_active')->default(1);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('reason_id')->references('id')->on('dismission_reasons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_dismissions');
    }
}
