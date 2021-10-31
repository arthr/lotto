<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePremioImagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('premio_imagens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('premio_id');
            $table->foreign('premio_id')
                ->references('id')
                ->on('premios');
            $table->string('titulo')->nullable();
            $table->string('caminho');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('premio_imagens');
    }
}
