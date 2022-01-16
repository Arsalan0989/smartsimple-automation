<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstname')->index();
            $table->string('lastname')->index();
            $table->string('email')->unique();
            $table->string('mobile_country_code')->index();
            $table->string('mobile')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('mobile_verified_at')->nullable();
            $table->string('password');
            $table->tinyInteger('superadmin')->default(0)->index();
            $table->tinyInteger('saas_user')->default(0)->index();
            $table->tinyInteger('company')->default(0)->index();
            $table->tinyInteger('company_staff')->default(0)->index();
            $table->bigInteger('company_id')->default(0)->index();
            $table->bigInteger('client_id')->default(0)->index();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
