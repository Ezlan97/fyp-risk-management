<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRisksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('risks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('cause_description')->nullable();
            $table->string('effect_description')->nullable();
            $table->string('effect_rate')->nullable();
            $table->string('file')->nullable();
            $table->string('occurrence')->nullable();
            $table->string('manageability')->nullable();
            $table->string('dependencies')->nullable();
            $table->string('proximities')->nullable();
            $table->string('Urgency')->nullable();
            $table->string('user_id');
            $table->string('status');
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
        Schema::dropIfExists('risks');
    }
}
