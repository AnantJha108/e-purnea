<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('user_id')->contrained();
            $table->foreignId('category_id')->contrained();
            $table->string('primary_contact');
            $table->string('secondary_contact')->nullable();
            $table->text('description');
            $table->string('proprietor');
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->enum('status',['0','1'])->default('1');
            $table->string('images');
            $table->string('pin_code');
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
        Schema::dropIfExists('businesses');
    }
};
