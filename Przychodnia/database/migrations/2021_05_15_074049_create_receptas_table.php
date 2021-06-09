<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceptasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receptas', function (Blueprint $table) {
            $table->id();
            $table->longText('Medicines');
            $table->longText('recommendations');
            $table->string("patient_pesel");
            $table->foreignId("id_lekarz")->references('id')->on('lekarzs');
            $table->foreignId("id_wizyta")->references('id')->on('wizytas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receptas');
    }
}
