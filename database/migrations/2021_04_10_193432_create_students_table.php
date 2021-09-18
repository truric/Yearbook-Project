<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('group_id')->nullable();
            $table->integer('category');
            $table->foreignId('parish_id')->nullable();
            $table->string('nickname')->nullable();

            $table->integer('phone')->nullable();
            $table->boolean('permissionPhone');
            $table->integer('permissionAddress');
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();





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
        Schema::dropIfExists('students');
    }
}
