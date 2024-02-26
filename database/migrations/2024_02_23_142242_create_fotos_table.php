<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotosTable extends Migration
{
    public function up()
    {
        Schema::create('fotos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fotos');
    }
}
