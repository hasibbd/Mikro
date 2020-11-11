<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRouterListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('router_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('r_name');
            $table->string('user_id');
            $table->string('r_id');
            $table->string('i_name');
            $table->string('ip');
            $table->string('user');
            $table->string('pass');
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
        Schema::dropIfExists('router_lists');
    }
}
