<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('todolist_id');
            $table->foreign('todolist_id')->references('id')->on('todo_lists');
            $table->string('title');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
