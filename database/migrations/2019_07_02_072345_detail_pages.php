<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetailPages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('page_id');
            $table->text('text');
            $table->string('voice');
            $table->timestamps();

            $table->foreign('page_id')
                ->references('id')->on('pages')
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
        Schema::drop('detail_pages');
    }
}
