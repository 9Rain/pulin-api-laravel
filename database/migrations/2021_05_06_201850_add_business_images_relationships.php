<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBusinessImagesRelationships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('business_images', function (Blueprint $table) {
            $table->foreignId('business_album_id')
            ->constrained('business_albums')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('business_images', function (Blueprint $table) {
            $table->dropConstrainedForeignId('business_album_id');
        });
    }
}
