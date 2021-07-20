<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMessengerColorToUsers extends Migration
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
            if (!Schema::hasColumn('admins', 'messenger_color')) {
                $table->string('messenger_color')->default('#2180f3');
            }
        });

        Schema::table('veos', function (Blueprint $table) {
            // if not exist, add the new column
            if (!Schema::hasColumn('veos', 'messenger_color')) {
                $table->string('messenger_color')->default('#2180f3');
            }
        });

        Schema::table('farmers', function (Blueprint $table) {
            // if not exist, add the new column
            if (!Schema::hasColumn('farmers', 'messenger_color')) {
                $table->string('messenger_color')->default('#2180f3');
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
            $table->dropColumn('messenger_color');
        });
        Schema::table('veos', function (Blueprint $table) {
            $table->dropColumn('messenger_color');
        });
        Schema::table('farmers', function (Blueprint $table) {
            $table->dropColumn('messenger_color');
        });
    }
}
