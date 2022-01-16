<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntityDataValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entity_data_values', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('entity_data_id')->default(0)->index();
            $table->bigInteger('entity_id')->default(0)->index();
            $table->bigInteger('attribute_id')->default(0)->index();
            $table->bigInteger('attribute_value_id')->default(0)->index();
            $table->longText('attribute_entity_value')->nullable();
            $table->string('attribute_string_value', 1000)->default('0')->index();
            $table->integer('attribute_int_value')->default(0)->index();
            $table->integer('attribute_min_int_value')->default(0)->index();
            $table->integer('attribute_max_int_value')->default(0)->index();
            $table->decimal('attribute_float_value', 10, 2)->default(0)->index();
            $table->decimal('attribute_min_float_value', 10, 2)->default(0)->index();
            $table->decimal('attribute_max_float_value', 10, 2)->default(0)->index();
            $table->longText('attribute_text_value')->nullable();
            $table->date('attribute_date_value')->nullable();
            $table->string('attribute_time_value', 50)->nullable();
            $table->dateTime('attribute_datetime_value')->nullable();
            $table->date('attribute_min_date_value')->nullable();
            $table->date('attribute_max_date_value')->nullable();
            $table->date('attribute_min_datetime_value')->nullable();
            $table->date('attribute_max_datetime_value')->nullable();
            $table->string('attribute_min_time_value', 50)->nullable();
            $table->string('attribute_max_time_value', 50)->nullable();
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
        Schema::dropIfExists('entity_data_values');
    }
}
