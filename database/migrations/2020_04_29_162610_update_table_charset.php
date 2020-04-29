<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableCharset extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up() {
        DB::unprepared('ALTER TABLE `groups` CONVERT TO CHARACTER SET utf8mb4');
        Schema::table('groups', function (Blueprint $table) {
            $table->string('decoration')->nullable();
        });
    }
    
    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down() {
        DB::unprepared('ALTER TABLE `groups` CONVERT TO CHARACTER SET utf8');
        $table->dropColumn('decoration');
    }
}
