<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSpecialistDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specialist_doctors', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('fname');
            $table->string('lname');
            $table->string('phone');
            $table->string('propic');
            $table->string('password');
            $table->string('homeaddress');
            $table->string('chamberaddress');
            $table->string('hospital');
            $table->string('nidno');
            $table->string('medcollege');
            $table->string('gradyear');
            $table->string('licenseno');
            $table->integer('experience');
            $table->string('degree');
            $table->string('field');
            $table->integer('age');
            $table->string('gender');
            $table->timestamp('created_at');
            //$table->timestamps('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specialist_doctors');
    }
}
