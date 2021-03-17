<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nume');
            $table->double('pret');
            $table->string('imagine');
       //     $table->unsignedBigInteger('imagine_id');
         //   $table->foreign('imagine_id')->references('id')->on('imagines');
            $table->integer('cantitatea');
            $table->string('producator');
            $table->smallInteger('nota');
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
        Schema::dropIfExists('products');
    }
}
