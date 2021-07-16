<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('med_posts', function (Blueprint $table) {
            $table->id();
            $table->string('patient_email');
            $table->string('post_type');
            $table->string('problem_type');
            $table->text('details');
            $table->string('image');
            $table->string('pdf');
            $table->timestamp('created_at');
            $table->integer('prescription_count');
            $table->integer('specialist_count');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('med_posts');
    }
}
