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
        Schema::dropIfExists('users');
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',20)->nullable();
            $table->string('first_name',30)->nullable();
            $table->string('last_name',30)->nullable();
            $table->string('email',100)->nullable(false);
            $table->string('password')->nullable();          
            $table->integer('created_by')->default(1);
            $table->integer('status')->default(1)->comment('0-default, 1 active, 9-inactive');
            $table->rememberToken();
            $table->timestamp('last_login_at')->nullable();
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
