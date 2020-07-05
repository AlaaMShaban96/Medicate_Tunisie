<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentAvailablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('appointment_availables');
        Schema::create('appointment_availables', function (Blueprint $table) {
            $table->id();
            $table->foreignId('clinic_id')
                ->constrained('clinics');

            $table->foreignId('doctor_id')
                ->constrained('doctors');

            $table->foreignId('service_id')
                ->constrained('services');

            $table->time('time_from', 0);
            $table->time('time_to', 0);
            $table->tinyInteger('number_of_patient');
            $table->boolean('status_appointment');
            
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
        Schema::dropIfExists('appointment_availables');
    }
}
