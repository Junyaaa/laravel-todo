<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            // $table->id();
            $table->increments('id');
            $table->string('task', 50);
            $table->integer('folder_id')->unsigned();
            $table->string('title', 100);
            $table->date('due_date');
            $table->date('due_date');
            $table->integer('status')->default(1);
            $table->timestamps();


            // 外部キーを設定する
            $table->foreign('folder_id')->references('id')->on('folders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todos');
    }
}
