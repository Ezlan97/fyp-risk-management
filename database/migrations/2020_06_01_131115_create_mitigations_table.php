<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMitigationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mitigations', function (Blueprint $table) {
            $table->id();
            $table->string('risk_id');
            $table->string('how');
            $table->string('explanation');
            $table->string('dateline');
            $table->string('status')->default('Menunggu Kelulusan');
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
        Schema::dropIfExists('mitigations');
    }
}
