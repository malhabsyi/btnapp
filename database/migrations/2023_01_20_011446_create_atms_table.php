<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atms', function (Blueprint $table) {
            $table->id();
            $table->string('atm_location');
            $table->string('atm_deadline');
            $table->string('atm_note');
            $table->string('atm_status');
            $table->foreignId('kantor_cabang_id');
            $table->foreignId('outlet_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atms');
    }
}
