<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAvatarToUsers extends Migration
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
            if (!Schema::hasColumn('admins', 'avatar')) {
                $table->string('avatar')->default(config('chatify.user_avatar.default'));
            }
        });

        Schema::table('veos', function (Blueprint $table) {
            // if not exist, add the new column
            if (!Schema::hasColumn('veos', 'avatar')) {
                $table->string('avatar')->default(config('chatify.user_avatar.default'));
            }
        });

        Schema::table('farmers', function (Blueprint $table) {
            // if not exist, add the new column
            if (!Schema::hasColumn('farmers', 'avatar')) {
                $table->string('avatar')->default(config('chatify.user_avatar.default'));
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
            $table->dropColumn('avatar');
        });
        Schema::table('veos', function (Blueprint $table) {
            $table->dropColumn('avatar');
        });
        Schema::table('farmers', function (Blueprint $table) {
            $table->dropColumn('avatar');
        });
    }
}
