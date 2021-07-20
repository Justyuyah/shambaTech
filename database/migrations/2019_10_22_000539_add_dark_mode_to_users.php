<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDarkModeToUsers extends Migration
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
            if (!Schema::hasColumn('admins', 'dark_mode')) {
                $table->boolean('dark_mode')->default(0);
            }
        });
        Schema::table('veos', function (Blueprint $table) {
            // if not exist, add the new column
            if (!Schema::hasColumn('veos', 'dark_mode')) {
                $table->boolean('dark_mode')->default(0);
            }
        });
        Schema::table('farmers', function (Blueprint $table) {
            // if not exist, add the new column
            if (!Schema::hasColumn('farmers', 'dark_mode')) {
                $table->boolean('dark_mode')->default(0);
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
            $table->dropColumn('dark_mode');
        });
        Schema::table('farmers', function (Blueprint $table) {
            $table->dropColumn('dark_mode');
        });
        Schema::table('veos', function (Blueprint $table) {
            $table->dropColumn('dark_mode');
        });
    }
}
