<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebcodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webcode', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('supporting')->nullable()->default(false);
            $table->string('website');
            $table->string('profile_thumbnail');
            $table->string('coupon_codes');
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
        Schema::dropIfExists('webcode');
    }
}
