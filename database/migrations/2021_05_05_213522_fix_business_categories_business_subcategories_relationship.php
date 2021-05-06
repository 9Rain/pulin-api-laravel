<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixBusinessCategoriesBusinessSubcategoriesRelationship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('business_subcategories', function (Blueprint $table) {
            $table->dropConstrainedForeignId('business_categories');
            $table->foreignId('business_categories_id')->constrained('business_categories');
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
            $table->dropForeign(['business_categories_id']);
            $table->dropColumn('business_categories_id');
            $table->foreignId('business_categories')->constrained('business_categories');
        });
    }
}
