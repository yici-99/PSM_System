<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentresults', function (Blueprint $table) {
            $table->string('studentID');
            $table->string('studentName');
            $table->string('studentTitle');
            $table->string('SvName');
            $table->float('psm1Marks');
            $table->float('psm2Marks');
            $table->float('psmFinalResult');
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
        Schema::dropIfExists('studentresults');
    }
};
