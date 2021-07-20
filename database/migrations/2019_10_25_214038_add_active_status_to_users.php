<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddActiveStatusToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admins', function (Blueprint $table) {
            // if not exist, add the new column
            if (!Schema::hasColumn('admins', 'active_status')) {
                $table->boolean('active_status')->default(0);
            }
        });
        Schema::table('veos', function (Blueprint $table) {
            // if not exist, add the new column
            if (!Schema::hasColumn('veos', 'active_status')) {
                $table->boolean('active_status')->default(0);
            }
        });
        Schema::table('farmers', function (Blueprint $table) {
            // if not exist, add the new column
            if (!Schema::hasColumn('farmers', 'active_status')) {
                $table->boolean('active_status')->default(0);
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
        Schema::table('admins', function (Blueprint $table) {
            $table->dropColumn('active_status');
        });
        Schema::table('farmers', function (Blueprint $table) {
            $table->dropColumn('active_status');
        });
        Schema::table('veos', function (Blueprint $table) {
            $table->dropColumn('active_status');
        });
    }
}
