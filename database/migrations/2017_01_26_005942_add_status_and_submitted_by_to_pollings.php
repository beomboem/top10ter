<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusAndSubmittedByToPollings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pollings', function (Blueprint $table) {
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
        if(Schema::hasColumn('pollings','submitted_by')){
            Schema::table('pollings',function(Blueprint $table){
                $table->dropColumn('submitted_by');
            });
        }
        if(Schema::hasColumn('pollings','status')){
            Schema::table('pollings',function(Blueprint $table){
                $table->dropColumn('status');
            });
        }
    }
}
