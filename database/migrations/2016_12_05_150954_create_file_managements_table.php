<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileManagementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_managements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('attachment_type_id')->nullable();
            $table->string('name')->nullable();
            $table->string('file_name')->nullable();
            $table->string('description')->nullable();
            $table->string('file_type')->nullable();
            $table->string('fileable_id')->nullable();
            $table->string('fileable_type')->nullable();
            $table->string('type')->nullable();
            $table->string('extension')->nullable();
            $table->string('base_url')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('file_managements');
    }
}
