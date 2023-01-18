<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateFabricsTableCollectionRelation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fabrics', function (Blueprint $table) {
            $table->bigInteger('fabric_collection_id')->unsigned();
            $table->foreign('fabric_collection_id')->references('id')->on('fabric_collections');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fabrics', function (Blueprint $table) {
            $table->dropForeign(['fabric_collection_id']);
            $table->dropColumn('fabric_collection_id');
        });
    }
}
