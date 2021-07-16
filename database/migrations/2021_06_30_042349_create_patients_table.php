<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('userid');
            $table->string('email');
            $table->string('fname');
            $table->string('lname');
            $table->string('propic');
            $table->string('password');
            $table->integer('age');
            $table->string('gender');
            $table->string('phone');
            $table->string('bloodgroup');
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
        Schema::dropIfExists('patients');
    }
}
