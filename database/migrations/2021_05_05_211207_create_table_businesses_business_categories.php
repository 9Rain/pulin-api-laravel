<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBusinessesBusinessCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses_business_categories', function (Blueprint $table) {
            $table->foreignId('business_id')
            ->constrained('businesses')
            ->index('bbc_business_id_foreign');
            $table->foreignId('business_category_id')
            ->constrained('business_categories')
            ->index('bbc_business_category_id_foreign');
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
        Schema::dropIfExists('businesses_business_categories');
    }
}
