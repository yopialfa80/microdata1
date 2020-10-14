<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTblMedia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('judul_media', 200)->collation('latin1_swedish_ci')->nullable();
            $table->string('judul_img', 200)->collation('latin1_swedish_ci')->nullable();
            $table->text('img')->collation('latin1_swedish_ci')->nullable();
            $table->string('type')->collation('latin1_swedish_ci');
            $table->text('source')->collation('latin1_swedish_ci');
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
        Schema::dropIfExists('media');
    }
}
