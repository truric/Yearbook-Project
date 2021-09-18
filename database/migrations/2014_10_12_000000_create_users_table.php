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
            $table->string('fullName');
            $table->string('simpleName');
            $table->string('email')->unique();
//            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('url');
            $table->string('atec_id')->unique();
            $table->integer('role');
            $table->boolean('permissionEmail');
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
