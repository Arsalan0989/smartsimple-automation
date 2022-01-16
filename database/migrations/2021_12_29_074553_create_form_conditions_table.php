<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormConditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_conditions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('form_field_id')->default(0)->index();
            $table->string('condition_operator')->default('0')->index();
            $table->bigInteger('target_form_field_id')->default(0)->index();
            $table->string('target_form_field_value', 1000)->default('0')->index();
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
        Schema::dropIfExists('form_conditions');
    }
}
