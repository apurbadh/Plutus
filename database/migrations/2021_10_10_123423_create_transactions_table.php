<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            // $table->unsignedInteger("sender_id")->unsigned();
            // $table->unsignedInteger("reciever_id")->unsigned();
            $table->integer("amount");
            $table->timestamps();
            $table->foreignId("sender_id")
                  ->references("id")
                  ->on("users")
                  ->onDelete("cascade");
            $table->foreignId("reciever_id")
                  ->references("id")
                  ->on("users")
                  ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
