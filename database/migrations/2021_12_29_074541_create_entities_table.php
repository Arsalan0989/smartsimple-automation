<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entities', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('parent_id')->default(0)->index();
            $table->tinyInteger('involve_client')->default(0)->index();
            $table->tinyInteger('has_childs')->default(0)->index();
            $table->string('heading', 400)->index();
            $table->string('slug', 400)->default('0')->index();
            $table->string('icon', 1000)->default('0')->index();
            $table->string('description', 1000)->nullable()->index();
            $table->string('menu_title', 400)->index();
            $table->tinyInteger('show_in_menu')->default(1)->index();
            $table->tinyInteger('published')->default(1)->index();
            $table->bigInteger('company_id')->default(0)->index();
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
        Schema::dropIfExists('entities');
    }
}
