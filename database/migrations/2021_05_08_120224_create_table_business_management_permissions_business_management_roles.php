<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBusinessManagementPermissionsBusinessManagementRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_management_permissions_business_management_roles', function (Blueprint $table) {
            $table->foreignId('business_management_role_id')
            ->constrained('business_management_roles')
            ->index('bmr_foreign_id');
            $table->foreignId('business_management_permission_id')
            ->constrained('business_management_permissions')
            ->index('bmp_foreign_id');
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
        Schema::dropIfExists('business_management_permissions_business_management_roles');
    }
}
