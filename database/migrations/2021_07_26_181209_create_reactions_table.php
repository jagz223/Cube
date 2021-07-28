<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reactions', function (Blueprint $table) {
            $table->id();
            $table->boolean('happy');
            $table->boolean('laugh');
            $table->boolean('angry');
            $table->boolean('crying');
            $table->boolean('like');
            $table->boolean('heart');
            $table->boolean('strong');
            $table->boolean('smart');
            $table->boolean('scared');
            $table->boolean('surprised');
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
        Schema::dropIfExists('reactions');
    }
}
