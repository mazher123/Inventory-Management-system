<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_employees', function (Blueprint $table) {
          $table->Increments('id');
          $table->string('name');
          $table->string('email')->unique();
          $table->string('phone');
          $table->string('password');
          $table->string('address');
          $table->string('role');
          $table->string('image')->nullable();
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
        Schema::dropIfExists('data_employees');
    }
}
