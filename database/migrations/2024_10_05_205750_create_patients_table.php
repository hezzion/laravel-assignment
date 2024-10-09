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
        Schema::create('patients', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('user_id'); 
            $table->string('patientname'); 
            $table->string('departments'); 
            $table->string('doctor'); 
            $table->string('your_email'); 
            $table->string('your_phone'); 
            $table->date('date'); 
            $table->time('time'); 
            $table->text('comments')->nullable();
            $table->string('status')->default('pending'); 
            $table->text('reply')->nullable();
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
};
