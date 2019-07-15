<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Webphutung extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
        });

        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',191);
            $table->string('phone',191);
            $table->string('email',191)->unique();
            $table->string('password',191);
            $table->timestamp('email_verified_at')->nullable();
            $table->bigInteger('level')->unsigned();
            $table
                ->foreign('level')
                ->references('id')
                ->on('role');
            $table->timestamps();
        });

        Schema::create('requirements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->text('content');
            $table->integer('status');
            $table->timestamps();
        });
        Schema::create('recruitments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug');
            $table->string('summary');
            $table->string('image');
            $table->text('content');
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->date('begin_time')->nullable();
            $table->date('end_time')->nullable();
            $table->timestamps();
        });
        Schema::create('tagrecruitments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->bigInteger('recruitments_id')->unsigned();
            $table
                ->foreign('recruitments_id')
                ->references('id')
                ->on('recruitments')
                ->onDelete('cascade');
            $table->integer('searchs');
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
