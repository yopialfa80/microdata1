<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTblMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->id()->unsigned(false);
            $table->bigInteger('instansi_id')->index();
            $table->integer('id_parent')->collation('latin1_swedish_ci');
            $table->string('nama_menu', 30)->collation('latin1_swedish_ci');
            $table->string('order_menu', 4)->collation('latin1_swedish_ci')->nullable();
            $table->string('link', 100)->collation('latin1_swedish_ci')->nullable();
            $table->enum('status', ['y', 'n'])->collation('latin1_swedish_ci');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
    }
}
