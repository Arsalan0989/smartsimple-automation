<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntityDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entity_data', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('company_id')->default(0)->index();
            $table->bigInteger('entity_id')->default(0)->index();
            $table->bigInteger('client_id')->default(0)->index();
            $table->bigInteger('user_id')->default(0)->index();
            $table->string('ip', 50)->default('0')->index();
            $table->string('device', 400)->default('0')->index();
            $table->longText('recordjson')->nullable();
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
        Schema::dropIfExists('entity_data');
    }
}
