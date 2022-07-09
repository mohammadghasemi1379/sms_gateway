<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sms_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\User::class, 'sender_id');
            $table->text('message');
            $table->string('receiver_number');
            $table->string('sender_number')->nullable();
            $table->string('sender_getaway');
            $table->text('log_message')->nullable();
            $table->enum('status', ['SENT', 'FAIL', 'PENDING'])->default('PENDING');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sms_logs');
    }
};
