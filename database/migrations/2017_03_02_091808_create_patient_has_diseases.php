<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientHasDiseases extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_has_diseases', function (Blueprint $table) {
            $table->integer('patient_id')->unsigned();
            $table->integer('disease_id')->unsigned();

            $table->foreign('patient_id')
                ->references('id')
                ->on('patients')
                ->onDelete('cascade');

            $table->foreign('disease_id')
                ->references('id')
                ->on('diseases')
                ->onDelete('cascade');

            $table->primary(['patient_id', 'disease_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_has_diseases');
    }
}
