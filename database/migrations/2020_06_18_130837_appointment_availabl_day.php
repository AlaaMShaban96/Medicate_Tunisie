<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AppointmentAvailablDay extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment_available_day', function (Blueprint $table) {
            
            $table->foreignId('appointment_available_id')
                ->constrained('appointment_availables');

            $table->foreignId('day_id')
                ->constrained('days');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointment_available_day');
    }
}
