<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHighlightsColumnToFoodMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('food_menus', function (Blueprint $table) {
            if (!Schema::hasColumn('food_menus', 'highlight')) {
                $table->boolean('highlight');
            }
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
            $table->dropColumn('highlight');
        });
    }
}
