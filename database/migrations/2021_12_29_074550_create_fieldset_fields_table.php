<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFieldsetFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fieldset_fields', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('fieldset_id')->default(0)->index();
            $table->bigInteger('field_id')->default(0)->index();
            $table->integer('tabindex')->default(0)->index();
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
        Schema::dropIfExists('fieldset_fields');
    }
}
