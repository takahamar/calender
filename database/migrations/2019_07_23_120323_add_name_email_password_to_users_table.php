<?php

//use Illuminate\Support\Facades\Schema;
//use Illuminate\Database\Schema\Blueprint;
//use Illuminate\Database\Migrations\Migration;
//
//class AddNameEmailPasswordToUsersTable extends Migration
//{
//    /**
//     * Run the migrations.
//     *
//     * @return void
//     */
//    public function up()
//    {
//        Schema::table('users', function (Blueprint $table) {
//        $table->string('name');
//        $table->string('email')->unique();
//        $table->string('password', 60);
//        });
//    }
//
//    /**
//     * Reverse the migrations.
//     *
//     * @return void
//     */
//    public function down()
//    {
//        Schema::table('users', function (Blueprint $table) {
//        $table->dropColumn('name');
//        $table->dropColumn('email')->unique();
//        $table->dropColumn('password', 60);
//        });
//    }
//}