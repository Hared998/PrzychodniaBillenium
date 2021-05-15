<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWizytasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wizytas', function (Blueprint $table) {
            $table->id();
            
            $table->longText('useMedicines');
            $table->longText('symptoms');
            $table->foreignId("id_lekarz")->references('id')->on('lekarz');
            $table->timestamp('Date');
            $table->string('patientFirstName');
            $table->string('patientLastName');
            $table->string('patientPESEL', 11);
            $table->boolean('isBooked')->default(0);
            $table->boolean('isApproved')->default(0);
            


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wizytas');
    }
}
