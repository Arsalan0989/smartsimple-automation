<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_fields', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('company_id')->default(0)->index();
            $table->bigInteger('form_id')->default(0)->index();
            $table->bigInteger('field_id')->default(0)->index();
            $table->bigInteger('fieldset_id')->default(0)->index();
            $table->bigInteger('entity_id')->default(0)->index();
            $table->integer('tabindex')->default(0)->index();
            $table->longText('validations')->nullable();
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
        Schema::dropIfExists('form_fields');
    }
}
