<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTableTags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id()->unique()->unsigned(false);
            $table->string('nama_tag', 100)->collation('latin1_general_ci');
            $table->string('tag_seo', 100)->collation('latin1_general_ci');
            $table->integer('count');
            $table->bigInteger('instansi_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
    }
}