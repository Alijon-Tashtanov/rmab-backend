<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('application_use_services', function (Blueprint $table) {
            $table->dateTime('date')->nullable();
            $table->text('comment')->nullable();
            $table->bigInteger('user_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('application_use_services', function (Blueprint $table) {
            $table->dropColumn('user_id');
            $table->dropColumn('comment');
            $table->dropColumn('date');
        });
    }
};
