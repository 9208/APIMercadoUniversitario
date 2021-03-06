<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisementStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_advertisement_status', function (Blueprint $table) {
            $table->string('cd_advertisement_status','3');
            $table->primary('cd_advertisement_status');
            $table->string('ds_advertisement_status')
            ->comment('Descrição do status do anúncio');
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
        Schema::dropIfExists('tb_advertisement_status');
    }
}
