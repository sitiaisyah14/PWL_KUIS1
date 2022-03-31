<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TambahKolomDiTabelCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers',function (Blueprint $table){
            $table->string('email',255)->after('nama_customer')->nullable()->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customers',function(Blueprint $table){
            $table->dropColumn('customers');
        });
    }
}
