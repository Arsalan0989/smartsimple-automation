<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('heading', 400)->index();
            $table->string('slug', 400)->default('0')->index();
            $table->string('description', 1000)->nullable()->index();
            $table->tinyInteger('form_scope')->default(0)->index();
            $table->date('form_start_date')->nullable();
            $table->tinyInteger('has_end_date')->default(0)->index();
            $table->date('form_end_date')->nullable();
            $table->longText('form_ip_access')->nullable();
            $table->tinyInteger('published')->default(1)->index();
            $table->bigInteger('company_id')->default(0)->index();
            $table->bigInteger('client_id')->default(0)->index();
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
        Schema::dropIfExists('forms');
    }
}
