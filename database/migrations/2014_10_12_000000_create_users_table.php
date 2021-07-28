<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('tag')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('description')->default("Hey, this is my cube!");;
            $table->string('phone')->default("vacio");
            $table->integer('age')->default(0);
            $table->date('birth_date')->nullable();
            
            $table->integer('lenguage')->default(1);
            $table->integer('theme')->default(1);
            $table->integer('profile_privacy')->default(1);
            $table->integer('content_privacy')->default(1);
            $table->integer('friend_request_privacy')->default(1);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
