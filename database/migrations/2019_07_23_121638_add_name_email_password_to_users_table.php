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
//        $table->increments('id');
//        $table->string('name');
//        $table->string('email')->unique();
//        $table->string('auth');
//        $table->string('password', 60);
//        $table->rememberToken();
//        $table->timestamps();
//
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
//            Schema::dropIfExists('users');
//        });
//    }
//}
