<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSoftDeletesToRestaurantsTable extends Migration
{
    
    public function up()
    {
        Schema::table('restaurants', function (Blueprint $table) {
            $table->softDeletes(); 
        });
    }

   
    public function down()
    {
        Schema::table('restaurants', function (Blueprint $table) {
            $table->dropSoftDeletes();    
        });
    }
}
