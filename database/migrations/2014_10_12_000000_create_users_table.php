<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->tinyInteger('status')->default(0);
            $table->text('picture');
            $table->tinyInteger('is_admin')->default(0);
            $table->string('password');
            $table->string('fullname');
            
            $table->text('phone')->nullable();
            $table->text('maActive')->nullable();
            $table->text('address')->nullable();
            // $table->foreign('id')->references('users_id')->on('order')->onDelete('set null');;
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
