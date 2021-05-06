<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBusinessSubcategoriesRelationships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('business_subcategories', function (Blueprint $table) {
            $table->foreignId('business_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('business_subcategories', function (Blueprint $table) {
            $table->dropForeign(['business_categories']);
            $table->dropColumn('businesses_categories');
        });
    }
}
