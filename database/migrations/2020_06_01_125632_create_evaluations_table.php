<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->string('risk_id');
            $table->string('state')->default('Sebelum');
            $table->string('occurrence')->nullable();
            $table->string('manageability')->nullable();
            $table->string('dependencies')->nullable();
            $table->string('proximities')->nullable();
            $table->string('urgency')->nullable();
            $table->string('x')->nullable();
            $table->string('y')->nullable();
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
        Schema::dropIfExists('evaluations');
    }
}
