<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSocialMediasRelationships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('social_medias', function (Blueprint $table) {
            $table->foreignId('business_id')
            ->constrained('businesses')
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
        Schema::table('social_medias', function (Blueprint $table) {
            $table->dropConstrainedForeignId('business_id');
        });
    }
}
