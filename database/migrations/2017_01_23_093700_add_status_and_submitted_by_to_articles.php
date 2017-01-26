<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusAndSubmittedByToArticles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->integer('submitted_by')->nullable()->unsigned();
            $table->string('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(Schema::hasColumn('articles','submitted_by')){
            Schema::table('articles',function(Blueprint $table){
                $table->dropColumn('submitted_by');
            });
        }
        if(Schema::hasColumn('articles','status')){
            Schema::table('articles',function(Blueprint $table){
                $table->dropColumn('status');
            });
        }
    }
}
