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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('picture')->nullable();
            $table->string('code')->unique()->nullable();
            $table->string('theme')->default('1/');
            $table->string('fullname')->nullable();
            $table->string('nickname')->nullable();
            $table->string('slug')->nullable();
            $table->string('work')->nullable();
            $table->string('facebook')->nullable();
            $table->string('github')->nullable();
            $table->string('twitter')->nullable();
            $table->string('skype')->nullable();
            $table->string('youtube')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('job')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('nationalty')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('workemail')->nullable();
            $table->string('bio')->nullable();
            $table->string('cv')->nullable();
            $table->string('gmap')->nullable();
            $table->string('author')->nullable();
            $table->string('description')->nullable();
            $table->string('keywords')->nullable();
            $table->integer('status')->default(0);
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
