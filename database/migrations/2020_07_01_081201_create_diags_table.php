<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('phoneNo');
            $table->string('contactName');
            $table->string('email');
            $table->string('address');
            $table->string('area');
            $table->string('city');
            $table->string('state');
           
            $table->string('zipCode');
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
        Schema::dropIfExists('diags');
    }
}
