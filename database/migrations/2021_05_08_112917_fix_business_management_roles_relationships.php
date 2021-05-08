<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixBusinessManagementRolesRelationships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('business_management_roles', function (Blueprint $table) {
            $table->dropConstrainedForeignId('users');
            $table->foreignId('user_id')->constrained('users');
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
        Schema::table('business_management_roles', function (Blueprint $table) {
            $table->dropConstrainedForeignId('user_id');
            $table->dropConstrainedForeignId('business_id');
            $table->foreignId('users')
            ->constrained()
            ->onDelete('cascade');
        });
    }
}
