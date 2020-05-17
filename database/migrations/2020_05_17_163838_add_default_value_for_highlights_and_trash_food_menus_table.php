<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDefaultValueForHighlightsAndTrashFoodMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('food_menus', function (Blueprint $table) {
            $table->boolean('highlight')->default(false)->change();
            $table->boolean('trash')->default(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('food_menus', function (Blueprint $table) {
            $table->boolean('highlight')->default(NULL)->change();
            $table->boolean('trash')->default(NULL)->change();
        });
    }
}
