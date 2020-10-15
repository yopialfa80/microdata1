<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTblFile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file', function (Blueprint $table) {
            $table->id()->unsigned(false);
            $table->string('judul_file', 500)->collation('latin1_swedish_ci');
            $table->string('nama_file', 500)->collation('latin1_swedish_ci');
            $table->string('type_file', 20)->collation('latin1_swedish_ci');
            $table->timestamp('date')->default(DB::raw('CURRENT_TIMESTAMP'));
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
        Schema::dropIfExists('file');
    }
}
