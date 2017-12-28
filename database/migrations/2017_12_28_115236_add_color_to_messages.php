<?php

use App\Lecto\MessageColor;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddColorToMessages extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('messages', function(Blueprint $table) {
            $table->integer('color_id')->default(MessageColor::BLACK);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('messages', function(Blueprint $table) {
            $table->dropColumn('color');
        });
    }
}
