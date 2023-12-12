<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('dark_mode')->default(false);
            $table->boolean('email_notifications')->default(false);
            $table->string('privacy')->default('public');
            // Add any other columns you might need
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('dark_mode');
            $table->dropColumn('email_notifications');
            $table->dropColumn('privacy');
            // Drop any other columns if necessary
        });
    }

};
