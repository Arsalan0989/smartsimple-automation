<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('company_id')->default(0)->index();
            $table->string('name', 400)->index();
            $table->string('organization', 400)->index();
            $table->string('address', 1000)->index();
            $table->string('country', 400)->index();
            $table->string('state', 400)->index();
            $table->string('city', 400)->index();
            $table->string('zipcode', 400)->index();
            $table->string('lat', 400)->index();
            $table->string('lng', 400)->index();
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
        Schema::dropIfExists('clients');
    }
}
