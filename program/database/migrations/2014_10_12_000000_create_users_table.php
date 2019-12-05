<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id_news');
            $table->string('name_news');
            $table->string('text_news');
            $table->date('date_news');
            $table->string('shortDesk_news');
            $table->timestamps();
        });
        Schema::create('status_tovar', function (Blueprint $table) {
            $table->increments('id_status_tovara');
            $table->string('name_status_tovara');
            $table->timestamps();
        });
        Schema::create('type_oplata_tovar', function (Blueprint $table) {
            $table->increments('id_type_oplata_tovar');
            $table->string('name_type_oplata_tovar');
            $table->timestamps();
        });
        Schema::create('type_dostavka', function (Blueprint $table) {
            $table->increments('id_type_dostavka');
            $table->string('name_type_dostavka');
            $table->timestamps();
        });
        Schema::create('type_tovar', function (Blueprint $table) {
            $table->increments('id_type_tovar');
            $table->string('name_type_tovar');
            $table->timestamps();
        });
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id_users');
            $table->string('name_users');
            $table->string('surname_users');
            $table->string('phone_users' , 12)->unique();
            $table->string('address_users');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('viddilenya', function (Blueprint $table) {
            $table->increments('id_viddilenya');
            $table->string('name_viddilenya')->unique();
            $table->string('address_viddilenya');
            $table->string('city_viddilenya');
            $table->string('chas_robotu_viddilenya');
            $table->timestamps();
        });
        Schema::create('role_worker', function (Blueprint $table) {
            $table->increments('id_role_worker');
            $table->string('name_role_worker');
            $table->timestamps();
        });
        Schema::create('worker', function (Blueprint $table) {
            $table->increments('id_worker');
            $table->integer('id_users')->unsigned();
            $table->string('pasport_worker')->unique();
            $table->integer('id_viddilennya')->unsigned();
            $table->integer('id_role_worker')->unsigned();
            $table->timestamps();
            $table->foreign('id_users')->references('id_users')->on('users');
            $table->foreign('id_role_worker')->references('id_role_worker')->on('role_worker');
            $table->foreign('id_viddilennya')->references('id_viddilenya')->on('viddilenya');
        });
        Schema::create('tovar', function (Blueprint $table) {
            $table->increments('id_tovar');
            $table->integer('id_viddilenya')->unsigned();
            $table->integer('id_viddilenya_otrumuvach')->unsigned();
            $table->integer('id_vidpravlyvach')->unsigned();
            $table->integer('id_otrumyvach')->unsigned();
            $table->date('data_vidpravlennya');
            $table->date('data_otrumannya');
            $table->integer('id_worker')->unsigned();
            $table->integer('id_status_tovara')->unsigned();
            $table->integer('id_type_dostavka')->unsigned();
            $table->integer('id_type_tovar')->unsigned();
            $table->integer('id_type_oplata_tovar')->unsigned();
            $table->float('price');
            $table->timestamps();
            $table->foreign('id_viddilenya')->references('id_viddilenya')->on('viddilenya');
            $table->foreign('id_viddilenya_otrumuvach')->references('id_viddilenya')->on('viddilenya');
            $table->foreign('id_vidpravlyvach')->references('id_users')->on('users');
            $table->foreign('id_otrumyvach')->references('id_users')->on('users');
            $table->foreign('id_worker')->references('id_worker')->on('worker');
            $table->foreign('id_status_tovara')->references('id_status_tovara')->on('status_tovar');
            $table->foreign('id_type_dostavka')->references('id_type_dostavka')->on('type_dostavka');
            $table->foreign('id_type_tovar')->references('id_type_tovar')->on('type_tovar');
            $table->foreign('id_type_oplata_tovar')->references('id_type_oplata_tovar')->on('type_oplata_tovar');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('status_tovar');
        Schema::dropIfExists('type_oplata_tovar');
        Schema::dropIfExists('type_dostavka');
        Schema::dropIfExists('type_tovar');
        Schema::dropIfExists('users');
        Schema::dropIfExists('viddilenya');
        Schema::dropIfExists('role_workerController');
        Schema::dropIfExists('worker');
        Schema::dropIfExists('tovar');
        Schema::dropIfExists('news');
    }
}
