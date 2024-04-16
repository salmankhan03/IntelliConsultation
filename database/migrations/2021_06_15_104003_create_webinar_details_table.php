<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebinarDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webinar_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName',100)->nullable();
            $table->string('lastName',100)->nullable();
            $table->string('email')->nullable();
            $table->string('referer',50)->nullable();
            $table->string('refererName',50)->nullable();
            $table->text('description')->nullable();
            $table->boolean('receiveUpdate')->default(0);
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
        Schema::dropIfExists('webinar_details');
    }
}
