<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('no');
            $table->unsignedInteger('comp_id');
            $table->string('name');
            $table->string('glider_type')->nullable();  // Ⅰ、Ⅳ、Ⅴ
            $table->string('state')->nullable();        // ---、未、配車、済
            $table->text('map')->nullable();
            $table->string('driver')->nullable();
            $table->unsignedInteger('order')->nullable();

            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->unsignedInteger('distance')->nullable();
            $table->string('direction')->nullable();

            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            // $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('players');
    }
}
