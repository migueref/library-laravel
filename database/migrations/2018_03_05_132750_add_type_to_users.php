<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTypeToUsers extends Migration
{
    /**
     * php artisan migrate
     */
    public function up()
    {
         Schema::table('users', function($table) {
             $table->string('type')->default('member')->nullable();
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('users', function($table) {
             $table->dropColumn('type');
          });
    }
}
