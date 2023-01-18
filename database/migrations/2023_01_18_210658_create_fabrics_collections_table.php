<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFabricsCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fabrics_collections', function (Blueprint $table) {
            $table->bigInteger('fabric_id')->unsigned();
            $table->bigInteger('fabric_collection_id')->unsigned();
            $table->foreign('fabric_id')->references('id')->on('fabrics')
                ->onDelete('cascade');
            $table->foreign('fabric_collection_id')->references('id')->on('fabric_collections')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fabrics_collections');
    }
}
