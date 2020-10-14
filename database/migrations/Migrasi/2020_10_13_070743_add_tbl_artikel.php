<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTblArtikel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikels', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('kategori_id');
            $table->integer('headlines');
            $table->integer('utama');
            $table->string('judul_artikel', 500)->collation('latin1_swedish_ci');
            $table->text('caption', 200)->collation('latin1_swedish_ci');
            $table->string('slug', 100)->collation('latin1_swedish_ci');
            $table->text('isi_artikel')->collation('latin1_swedish_ci');
            $table->string('img', 500)->collation('latin1_swedish_ci');
            $table->text('metakey')->collation('latin1_swedish_ci');
            $table->text('metadesc')->collation('latin1_swedish_ci');
            $table->date('tanggal');
            $table->integer('view');
            $table->string('tag', 200)->nullable()->collation('latin1_swedish_ci');
            $table->integer('parent');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
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
        Schema::dropIfExists('artikels');
    }
}
