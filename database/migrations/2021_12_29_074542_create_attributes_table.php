<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attributes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('entity_id')->default(0)->index();
            $table->string('slug', 400)->default('0')->index();
            $table->tinyInteger('attribute_type')->default(0)->index();
            $table->tinyInteger('has_options')->default(0)->index();
            $table->tinyInteger('options_source')->default(0)->index();
            $table->string('options_source_file', 1000)->nullable()->index();
            $table->string('options_source_json', 1000)->nullable()->index();
            $table->string('options_source_api', 1000)->nullable()->index();
            $table->string('options_source_key', 1000)->nullable()->index();
            $table->string('options_source_value', 1000)->nullable()->index();
            $table->bigInteger('options_entity_id')->default(0)->index();
            $table->longText('validation_json')->nullable();
            $table->tinyInteger('published')->default(1)->index();
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
        Schema::dropIfExists('attributes');
    }
}
