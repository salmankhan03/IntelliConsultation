<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCountryCityWebinarDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('webinar_details', function (Blueprint $table) {
            $table->string('country')->after("email")->nullable();
            $table->string('city')->after("country")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('webinar_details', function (Blueprint $table) {
            $table->dropColumn('country');
            $table->dropColumn('city');
        });
    }
}
