<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TambahKolomDiTabelEmployee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->string('username', 20)->after('name')->nullable()->unique();
            $table->string('password', 20)->after('username')->nullable();
            $table->rememberToken();
            $table->string('email', 50)->after('password')->nullable()->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->$table->dropColumn('username');
            $table->$table->dropColumn('password');
            $table->$table->dropColumn('email');
        });
    }
}
