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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id(); // Primary key ID for the message
            $table->unsignedBigInteger('user_id'); // Foreign key for user ID
            $table->unsignedBigInteger('doctor_id'); // Foreign key for doctor ID
            $table->text('message'); // The message content
            $table->timestamp('created_at')->useCurrent(); // Message creation time
            $table->boolean('is_read_doctor')->default(false); // Whether the doctor has read the message
            $table->boolean('is_read_user')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notifications');
    }
};
