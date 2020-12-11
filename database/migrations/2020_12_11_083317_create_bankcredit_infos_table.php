<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankcreditInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bankcredit_infos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('stavka');
            $table->integer('srok_ot');
            $table->integer('srok_do');
            $table->integer('summa_ot');
            $table->integer('summa_do');
            $table->foreignId('bank_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bankcredit_infos');
    }
}
