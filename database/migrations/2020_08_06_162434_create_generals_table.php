<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generals', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('title')->nullable();
            $table->string('tagline')->nullable();
            $table->string('primary_color')->nullable();
            $table->string('secondary_color')->nullable();
            $table->string('gradient')->nullable();
            $table->string('ig')->nullable();
            $table->string('fb')->nullable();
            $table->string('yt')->nullable();
            $table->string('tw')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
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
        Schema::dropIfExists('generals');
    }
}
