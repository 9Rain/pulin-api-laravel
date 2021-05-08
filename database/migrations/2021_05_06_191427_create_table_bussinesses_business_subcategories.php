<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBussinessesBusinessSubcategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bussinesses_business_subcategories', function (Blueprint $table) {
            $table->foreignId('business_id')
            ->constrained('businesses')
            ->index('bbs_business_id_foreign');
            $table->foreignId('business_subcategory_id')
            ->constrained('business_subcategories')
            ->index('bbs_business_subcategory_id_foreign');
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
        Schema::dropIfExists('bussinesses_business_subcategories');
    }
}
