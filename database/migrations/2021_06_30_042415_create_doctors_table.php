<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('fname');
            $table->string('lname');
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

            $table->integer('age');
            $table->string('gender');
            $table->string('phone');
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
        Schema::dropIfExists('doctors');
    }
}
