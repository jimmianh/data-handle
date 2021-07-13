<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_users', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email');
            $table->string('password');
            $table->string('phoneNumber');
            $table->dateTime('birthday');
            $table->string('address');
            $table->text('avatar')->default('https://scontent.fhan5-4.fna.fbcdn.net/v/t1.30497-1/143086968_2856368904622192_1959732218791162458_n.png?_nc_cat=1&ccb=1-3&_nc_sid=7206a8&_nc_ohc=R0xkpaRZ95QAX-U_s-g&_nc_ht=scontent.fhan5-4.fna&oh=8de0861b2649596c8505d3a349659634&oe=60E9ED38');
            $table->text('coverPhoto');
            $table->integer('status')->default(\App\Enums\Status::ACTIVE);
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
        Schema::dropIfExists('_users');
    }
}
