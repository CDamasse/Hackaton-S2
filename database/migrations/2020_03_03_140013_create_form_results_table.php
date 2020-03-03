<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('creativity');
            $table->integer('autonomy');
            $table->integer('rigor');
            $table->integer('teamwork');
            $table->integer('evaluation_method');
            $table->integer('digital');
            $table->integer('science');
            $table->integer('literature');
            $table->integer('foreign_lang');
            $table->integer('total_score');
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
        Schema::dropIfExists('form_results');
    }
}
