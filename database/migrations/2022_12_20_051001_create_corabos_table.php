<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corabos', function (Blueprint $table) {
            $table->id();
            $table->string('dev_title');
            $table->string('dev_content');
            $table->string('team_name');
            $table->string('ex_period');
            $table->string('startdate');
            $table->string('enddate');
            $table->string('web_num');
            $table->string('design_num');
            $table->string('soft_num');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('corabos');
    }
};
