<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConversacionReplyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversacion_reply', function (Blueprint $table) {
            $table->id();
            $table->text("reply");
            $table->integer("user_id_fk");
            $table->string("ip");
            $table->integer("time");
            $table->integer("conversacion_id_fk");
            $table->float("latitude");
            $table->float("logitude");
            $table->foreign("user_id_fk")->references("id")->on("conversacion");
            $table->foreign("conversacion_id_fk")->references("id")->on("conversacion");

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
        Schema::dropIfExists('conversacion_reply');
    }
}
