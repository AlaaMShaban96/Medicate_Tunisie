<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_services', function (Blueprint $table) {
            $table->id();
            $table->string('titel_ar');
            $table->string('titel_en');
            $table->string('titel_fr');

            $table->string('descrption_ar');
            $table->string('descrption_en');
            $table->string('descrption_fr');
            
            $table->text('details_ar')->nullable();
            $table->text('details_en')->nullable();
            $table->text('details_fr')->nullable();
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
        Schema::dropIfExists('company_services');
    }
}
