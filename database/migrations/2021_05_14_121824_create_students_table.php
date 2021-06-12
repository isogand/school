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
            $table->bigIncrements('id');
            $table->tinyInteger('role_id')->index()->unsigned()->nullable();
            $table->integer('is_active')->default(0);
            $table->string('name');
            $table->string('last_mark');
            $table->string('email');
            $table->string('phone');
            $table->string('gender');
            $table->string('password');
            $table->string('date_of_birth');
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
        Schema::dropIfExists('students');
    }
}
